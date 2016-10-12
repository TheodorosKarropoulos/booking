<?php

class Service extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->serviceList = $this->model->serviceList();
        $this->view->render('service/index');
    }

    public function add()
    {
        $this->view->render('service/add');
    }

    public function create()
    {
        $data = array(
            'service_name' => $_POST['service_name']
        );
        $this->model->create($data);
        header('location: ' . BASE_URL . SERVICE_URL);
    }

    public function edit($id)
    {
        $this->view->service = $this->model->serviceSingleList($id);

        if(empty($this->view->service))
        {
            die('This is an invalid service!');
        }

        $this->view->render('service/edit');
    }

    public function editSave($id)
    {
        $data = array(
            'service_id' => $id,
            'service_name' => $_POST['service_name']
        );

        $this->model->editSave($data);
        header('location: ' . BASE_URL . SERVICE_URL);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . BASE_URL . SERVICE_URL);
    }
}