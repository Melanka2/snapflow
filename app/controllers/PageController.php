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
    public function admindashboard()
    {
        $this->view('pages/admindashboard');
    }
    public function payment()
    {
        $this->view('pages/payment');
    }

    public function adminprofile()
    {
        $this->view('pages/adminprofile');
    }

    public function editorprofile()
    {
        $this->view('pages/editorprofile');
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function userprofile()
    {
        $this->view('pages/userprofile');
    }




}
