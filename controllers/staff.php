<?php

class Staff extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->staffList = $this->model->staffList();
        $this->view->render('staff/index');
    }

    public function add()
    {
        $this->view->render('staff/add');
    }

    public function create()
    {
        if(empty($_POST['is_active']))
        {
            $is_active = 0;
        }
        else
        {
            $is_active = 1;
        }
        $data = array(
            'is_active' => $is_active,
            'staff_name' => $_POST['staffname'],
            'staff_email' => $_POST['email'],
            'staff_phone' => $_POST['phone'],
            'staff_password' => $_POST['password']
        );
        $this->model->create($data);
        header('location: ' . BASE_URL . STAFF_URL);
    }

    public function edit($id)
    {
        $this->view->staff = $this->model->staffSingleList($id);

        if(empty($this->view->staff))
        {
            die('This is an invalid staff!');
        }

        $this->view->render('staff/edit');
    }

    public function editSave($id)
    {
        if(empty($_POST['is_active']))
        {
            $is_active = 0;
        }
        else
        {
            $is_active = 1;
        }
        $data = array(
            'staff_id' => $id,
            'is_active' => $is_active,
            'staff_name' => $_POST['staffname'],
            'staff_email' => $_POST['email'],
            'staff_phone' => $_POST['phone']
        );

        $this->model->editSave($data);
        header('location: ' . BASE_URL . STAFF_URL);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . BASE_URL . STAFF_URL);
    }
}