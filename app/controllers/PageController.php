<?php

class PageController extends Controller
{
    var $adminModel;

    public function __construct()
    {


        $this->adminModel = $this->model('Admin');
    }

    public function index()
    {
        $this->view('pages/homepage');
    }

    public function signup()
    {
        $this->view('pages/signup');
    }

    public function signIn()
    {
        $this->view('pages/signIn');
    }
}
