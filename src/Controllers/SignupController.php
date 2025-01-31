<?php

namespace App\Controllers;

Use App\Models\Signup;
use App\Framework\Validation;

Class SignupController extends Signup
{

    public function signupUser()
    {

        session_start();

        $uid = htmlspecialchars($_POST['uid']);
        $email = htmlspecialchars($_POST['email']);
        $pwd = $_POST['pwd'];
        $pwdRepeat = $_POST['pwd_repeat'];

        $_SESSION['errors'] = [];

        if ($this->emptyInput($uid, $email, $pwd, $pwdRepeat) == false){
            array_push($_SESSION['errors'], 'Please input all fields');
            redirect('/offtopic/auth');
            die();
        }
        if ($this->invalidUid($uid) == false){
            array_push($_SESSION['errors'], 'Username is invalid');
            redirect('/offtopic/auth');
            die();
        }
        if ($this->invalidEmail($email) == false){
            array_push($_SESSION['errors'], 'Email is invalid');
            redirect('/offtopic/auth');
            die();
        }
        if ($this->pwdMatch($pwd, $pwdRepeat) == false){
            array_push($_SESSION['errors'], 'Passwords do not match');
            redirect('/offtopic/auth');
            die();
        }
        if ($this->uidTakenCheck($uid, $email) == false){
            array_push($_SESSION['errors'], 'Username is already taken');
            redirect('/offtopic/auth');
            die();
        }

        $this->setUser($uid, $email, $pwd);
        redirect('/offtopic/auth');
    }

    private function emptyInput($uid, $email, $pwd, $pwd_repeat)
    {
        $result = false;
        if (empty($uid) || empty($pwd) || empty($pwd_repeat) || empty($email)){
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUid($uid) 
    {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail($email) {
        $result = false;
        // is FILTER_VALIDATE_EMAIL deprecated?
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch($pwd, $pwdRepeat) {
        $result = false;
        if ($pwd !== $pwdRepeat){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck($uid, $email) {
        $result = false;
        if (!$this->checkUser($uid, $email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
