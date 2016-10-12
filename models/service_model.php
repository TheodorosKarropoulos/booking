<?php

class Service_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function serviceList()
    {
        return $this->db->select('select * from service order by service_name asc');
    }

    public function serviceSingleList($id)
    {
        return $this->db->select('select * from service where service_id = :id',
            array('id' => $id));
    }

    public function create($data)
    {
        $this->db->insert('service', array(
            'service_name' => $data['service_name'],
            'ins_date' => date('Y-m-d H:i:s'),
            'upd_date' => date('Y-m-d H:i:s'),
            'ins_user' => Session::get('username'),
            'upd_user' => Session::get('username')
        ));
    }

    public function editSave($data)
    {
        $postData = array(
            'service_name' => $data['service_name'],
            'upd_date' => date('Y-m-d H:i:s'),
            'upd_user' => Session::get('username')
        );

        $this->db->update('service', $postData,
            "`service_id` = '{$data['service_id']}'");
    }

    public function delete($id)
    {
        $this->db->delete('service', "service_id = '$id'");
    }

}