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
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: ' . URLROOT . '/PageController/login');
        }
        $this->view('pages/admindashboard', $data);
    }
    public function payment()
    {
        $this->view('pages/payment');
    }

    public function adminprofile()
    {
        $organizations = $this->organizationController->getNotAcceptedOrganizations();
        extract($organizations);
        $this->view('pages/adminprofile',$organizations);
    }

    public function blog()
    {
        $organizations = $this->organizationController->getOrganizations();
        extract($organizations);
        $this->view('pages/blog', $organizations);
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function editorprofile()
    {
        $this->view('pages/editorprofile');
    }

    public function userprofile()
    {
        $this->view('pages/userprofile');
    }
}
