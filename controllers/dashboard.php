<?php

class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false)
        {
            Session::destroy();
            header('Location:' . BASE_URL);
            exit();
        }

    }

    function index()
    {
        $this->view->render('dashboard/index');
    }

    function logout()
    {
        Session::destroy();
        header('Location: ' . BASE_URL);
        exit();
    }

}