<?php

namespace App\Controllers;

use App\Models\Thread;

Class HomeController extends Thread
{

    public function home()
    {
        $this->getThreads();
        loadPages('home');
    }
    
    public function create()
    {
        loadPages('create');
    } 

    public function profile()
    {
        loadPages('profile');
    }

    /* ### LOADS UNIQUE THREADS ### */

    public function content()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);

            loadThread('content', ['id' => $id]);
        } else {
            loadThread('content', ['error' => 'No valid ID provided']);
        }
        

    }
}