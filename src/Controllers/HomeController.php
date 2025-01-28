<?php

namespace App\Controllers;

use App\Models\Thread;

Class HomeController extends Thread
{

    public function index()
    {
        $this->getAllThreads();
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

    public function content()
    {
        loadPages('content');
    }

}