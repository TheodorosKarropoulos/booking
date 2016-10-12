<?php

class Setup extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->setupList = $this->model->setupList();
        $this->view->render('setup/index');
    }

    public function add()
    {
        $this->view->render('setup/add');
    }

    public function create()
    {
        $data = array(
            'setup_name' => $_POST['setup_name'],
            'from_hour' => $_POST['from_hour'],
            'to_hour' => $_POST['to_hour']
        );
        $this->model->create($data);
        header('location: ' . BASE_URL . SETUP_URL);
    }

    public function edit($id)
    {
        $this->view->setup = $this->model->setupSingleList($id);

        if(empty($this->view->setup))
        {
            die('This is an invalid setup!');
        }

        $this->view->render('setup/edit');
    }

    public function editSave($id)
    {
        $data = array(
            'setup_id' => $id,
            'setup_name' => $_POST['setup_name'],
            'from_hour' => $_POST['from_hour'],
            'to_hour' => $_POST['to_hour']
        );

        $this->model->editSave($data);
        header('location: ' . BASE_URL . SETUP_URL);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . BASE_URL . SETUP_URL);
    }
}