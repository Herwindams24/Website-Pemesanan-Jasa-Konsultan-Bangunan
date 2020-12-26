<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('common/home2/header');
        $this->view('home/home');
        $this->view('common/home2/footer');
    }
}
