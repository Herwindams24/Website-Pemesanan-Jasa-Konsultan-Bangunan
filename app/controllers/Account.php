<?php

class Account extends Controller
{
    public function index()
    {
        $this->view('sbadmin/signup');
        $this->view('sbadmin/login');
    }

    public function signUp()
    {
        $this->view('common/sbadmin/signup');
    }

    public function login()
    {
        $this->view('common/sbadmin/login');
    }
}
