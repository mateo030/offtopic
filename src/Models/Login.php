<?php

namespace App\Models;

use App\Config\Database, PDO;
use ErrorException;

class Login extends Database
{
    public function getUser($email, $pwd)
    {
        try {

            $query = 'SELECT id, users_uid, users_email, users_pwd FROM users WHERE users_email = :users_email;';
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":users_email" , $email);
    
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $checkPwd = password_verify($pwd, $user["users_pwd"]);

            $login_error_msg = [
                "userNotFound" => "User not found",
                "wrongPassword" => "Username or password is incorrect"
            ];
    
            if($stmt->rowCount() == 0) {
                $_SESSION['userNotFound'] = $login_error_msg['userNotFound'];
            }

            if($checkPwd == false) {
                $_SESSION['wrongPassword'] = $login_error_msg['wrongPassword'];
                
            } 

            if (isset($_SESSION['userNotFound']) || isset($_SESSION['wrongPassword'])) {
                redirect('/offtopic/auth');
                die();
            } 
            
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_uid"] = $user["users_uid"];

            $stmt = null;

        } catch(ErrorException $e) {
            die('Error: ' . $e->getMessage());
        }
        
    }
}