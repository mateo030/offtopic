<?php

namespace App\Controllers;

use App\Models\Thread;

Class ThreadController
{

    public function submit()
    {

        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $category = $_POST['category'];

        $_SESSION['errors'] = [];
        
        if(!$this->emptyInput()) {
            array_push($_SESSION['errors'], 'Input all fields');    
            redirect('/offtopic/create');
        }

        $thread = new Thread();

        $thread->setThread($_SESSION["userId"], $title, $content, $category);

        redirect('/offtopic/');
        die();
    }

    public function reply()
    {

        $queryString = htmlspecialchars($_POST['postId']);
        $userId = htmlspecialchars($_POST['userId']);
        $content = htmlspecialchars($_POST['content']);

        list($query, $postId) = explode('=', $queryString);

        $_SESSION['errors'] = [];

        if (empty($content)) {
            array_push($_SESSION['errors'], 'Input all fields');    
            redirect('/offtopic/content?id=' . $postId);
        }

        $thread = new Thread();

        $thread->setReply($userId, $postId, $content);
        redirect('/offtopic/content?id=' . $postId);
        
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