<?php

class PageController extends Controller
{
    var $adminModel;
    var $organizationController;

    public function __construct()
    {
        $this->organizationController = $this->controller('OrganizationController');
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
    public function admindashboard($data)
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
        $this->view('pages/adminprofile');
    }

    public function blog()
    {
        $organizations = $this->organizationController->getOrganizations();
        extract($organizations);
        $this->view('pages/blog', $organizations);
    }
}
