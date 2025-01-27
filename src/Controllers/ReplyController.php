<?php

namespace App\Controllers;

use App\Models\Thread;

class ReplyController extends Thread
{
    public function reply()
    {

        $postId = htmlspecialchars($_POST['postId']);
        $userId = htmlspecialchars($_POST['userId']);
        $content = htmlspecialchars($_POST['content']);

        $_SESSION['errors'] = [];

        if (empty($content)) {
            array_push($_SESSION['errors'], 'Input all fields');    
            redirect('/offtopic/content?id=' . $postId);
        }

        $this->setReply($postId, $userId, $content);
        redirect('/offtopic/content?id=' . $postId);
        
    }

}