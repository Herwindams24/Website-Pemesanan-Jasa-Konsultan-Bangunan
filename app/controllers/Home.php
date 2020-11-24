<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('common/home/header');
        $this->view('home/home');
        $this->view('common/home/footer');
    }
}
