<?php

namespace App\Models;

use App\Config\DB;
use ErrorException;

class Signup
{
    
    protected function setUser($uid, $email, $pwd)
    {
        try {
            $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $query = 'INSERT INTO users (users_uid, users_email, users_pwd) VALUES (:users_uid, :users_email, :users_pwd)';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(":users_uid", $uid);
            $stmt->bindParam(":users_pwd", $hashed_pwd);
            $stmt->bindParam(":users_email", $email);

            $stmt->execute();
        } catch(ErrorException $e) {
            die('Error: ' . $e->getMessage());
        }
        
    }

    protected function checkUser($uid, $email) 
    {

        try {
            $query = 'SELECT users_uid FROM users WHERE users_uid = :users_uid OR users_email = :users_email;';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(":users_uid", $uid);
            $stmt->bindParam(":users_email", $email);

            $stmt->execute();

            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            } else {
                $resultCheck = true;
            }

            return $resultCheck;

        } catch(ErrorException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}