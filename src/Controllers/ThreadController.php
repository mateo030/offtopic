<?php

namespace App\Controllers;

use App\Models\Thread;

Class ThreadController extends Thread
{

    public function submitThread()
    {

        session_start();

        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $category = $_POST['category'];

        $_SESSION['errors'] = [];
        
        if(!$this->emptyInput()) {
            array_push($_SESSION['errors'], 'Input all fields');    
            redirect('/offtopic/create');
        }

        $this->setThread($_SESSION["user_id"], $title, $content, $category);

        redirect('/offtopic/');
        die();
    }

    private function emptyInput()
    {
        if (empty($_POST['title']) || empty($_POST['content'])){
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}