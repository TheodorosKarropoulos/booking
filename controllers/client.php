<?php

class Client extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->clientList = $this->model->clientList();
        $this->view->render('client/index');
    }

    public function add()
    {
        $this->view->render('client/add');
    }

    public function create()
    {
        $data = array(
            'client_name' => $_POST['client_name'],
            'client_email' => $_POST['client_email'],
            'client_phone' => $_POST['client_phone'],
            'client_address' => $_POST['client_address'],
            'client_birth_date' => $_POST['client_birth_date']
        );
        $this->model->create($data);
        header('location: ' . BASE_URL . CLIENT_URL);
    }

    public function edit($id)
    {
        $this->view->client = $this->model->clientSingleList($id);

        if(empty($this->view->client))
        {
            die('This is an invalid client!');
        }

        $this->view->render('client/edit');
    }

    public function editSave($id)
    {
        $data = array(
            'client_id' => $id,
            'client_name' => $_POST['client_name'],
            'client_email' => $_POST['client_email'],
            'client_phone' => $_POST['client_phone'],
            'client_address' => $_POST['client_address'],
            'client_birth_date' => $_POST['client_birth_date']
        );

        $this->model->editSave($data);
        header('location: ' . BASE_URL . CLIENT_URL);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . BASE_URL . CLIENT_URL);
    }
}