<?php

class Calendar_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function appointmentList()
    {
        return $this->db->select('select * from v_appointment order by appointment_date, appointment_hour, client_name asc');
    }

    public function customerForAppointmentList()
    {
        return $this->db->select('select client_id, client_name from client order by client_name asc');
    }

    public function serviceForAppointmentList()
    {
        return $this->db->select('select service_id, service_name from service order by service_name asc');
    }

    public function staffForAppointmentList()
    {
        return $this->db->select('select staff_id, staff_name from staff order by staff_name asc');
    }

    public function create($data)
    {
        $this->db->insert('appointment', array(
            'service_id' => $data['service_id'],
            'app_date' => $data['app_date'],
            'app_hour' => $data['app_hour'],
            'staff_id' => $data['staff_id'],
            'client_id' => $data['client_id'],
            'ins_date' => date('Y-m-d H:i:s'),
            'upd_date' => date('Y-m-d H:i:s'),
            'ins_user' => Session::get('username'),
            'upd_user' => Session::get('username')
        ));
    }

}