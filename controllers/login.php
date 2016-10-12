<?php
/**
 * Created by WebSector
 */

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('login/index');
    }

    public function wrong()
    {
        $this->view->render('login/wrong');
    }

    public function run()
    {
        $this->model->run();
    }
}