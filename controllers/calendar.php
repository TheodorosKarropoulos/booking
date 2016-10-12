<?php

class Calendar extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    function index()
    {
        $this->view->appointmentList = $this->model->appointmentList();
        $this->view->render('calendar/index');
    }

    public function add()
    {
        $this->view->customerForAppointmentList = $this->model->customerForAppointmentList();
        $this->view->serviceForAppointmentList = $this->model->serviceForAppointmentList();
        $this->view->staffForAppointmentList = $this->model->staffForAppointmentList();
        $this->view->render('calendar/add');
    }

    public function create()
    {
        $data = array(
            'service_id' => $_POST['service'],
            'app_date' => $_POST['app_date'],
            'app_hour' => $_POST['app_hour'],
            'staff_id' => $_POST['staff'],
            'client_id' => $_POST['client']
        );
        $this->model->create($data);
        header('location: ' . BASE_URL . CALENDAR_PATH);
    }
}