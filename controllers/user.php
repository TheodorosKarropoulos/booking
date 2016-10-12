<?php

class User extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function add()
    {
        $this->view->render('user/add');
    }

    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $data['user_position'] = $_POST['user_position'];
        $data['username'] = $_POST['username'];
        $data['is_active'] = $_POST['is_active'];

        $this->model->create($data);
        header('location: ' . BASE_URL . USER_URL);
    }

    public function edit($id)
    {
        $this->view->user = $this->model->userSingleList($id);

        if(empty($this->view->user))
        {
            die('This is an invalid user!');
        }

        $this->view->render('user/edit');
    }

    public function editSave($id)
    {
        $data = array(
            'id' => $id,
            'login' => $_POST['login'],
            'role' => $_POST['role'],
            'user_position' => $_POST['user_position'],
            'username' => $_POST['user_name'],
            'is_active' => $_POST['is_active']
        );

        $this->model->editSave($data);
        header('location: ' . BASE_URL . USER_URL);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . BASE_URL . USER_URL);
    }
}