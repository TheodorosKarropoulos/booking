<?php

class Client_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function clientList()
    {
        return $this->db->select('select * from client order by client_name asc');
    }

    public function clientSingleList($id)
    {
        return $this->db->select('select * from client where client_id = :id',
            array('id' => $id));
    }

    public function create($data)
    {
        $this->db->insert('client', array(
            'client_name' => $data['client_name'],
            'client_email' => $data['client_email'],
            'client_phone' => $data['client_phone'],
            'client_address' => $data['client_address'],
            'client_birth_date' => $data['client_birth_date'],
            'ins_date' => date('Y-m-d H:i:s'),
            'upd_date' => date('Y-m-d H:i:s'),
            'ins_user' => Session::get('username'),
            'upd_user' => Session::get('username')
        ));
    }

    public function editSave($data)
    {
        $postData = array(
            'client_name' => $data['client_name'],
            'client_email' => $data['client_email'],
            'client_phone' => $data['client_phone'],
            'client_address' => $data['client_address'],
            'client_birth_date' => $data['client_birth_date'],
            'upd_date' => date('Y-m-d H:i:s'),
            'upd_user' => Session::get('username')
        );

        $this->db->update('client', $postData,
            "`client_id` = '{$data['client_id']}'");
    }

    public function delete($id)
    {
        $this->db->delete('client', "client_id = '$id'");
    }

}