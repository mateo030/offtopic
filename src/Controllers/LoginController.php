<?php

namespace App\Controllers;

use App\Models\Login;

Class LoginController extends Login 
{

    public function loginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            session_start();

            $email = $_POST['email'];
            $pwd = $_POST['pwd'];

            $_SESSION['errors'] = [];

            if (!$this->emptyInput()){
                array_push($_SESSION['errors'], 'Please input all fields');
                redirect('/offtopic/auth');
                die();
            }
    
            $this->getUser($email, $pwd);
            redirect('/offtopic/');
        }
        
    }

    private function emptyInput()
    {
        if (empty($_POST['email']) || empty($_POST['pwd'])){
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}