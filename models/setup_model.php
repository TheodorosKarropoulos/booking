<?php

class Setup_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function setupList()
    {
        return $this->db->select('select * from setup');
    }

    public function setupSingleList($id)
    {
        return $this->db->select('select * from setup where setup_id = :id',
            array('id' => $id));
    }

    public function create($data)
    {
        $this->db->insert('setup', array(
            'setup_name' => $data['setup_name'],
            'from_hour' => $data['from_hour'],
            'to_hour' => $data['to_hour'],
            'ins_date' => date('Y-m-d H:i:s'),
            'upd_date' => date('Y-m-d H:i:s'),
            'ins_user' => Session::get('username'),
            'upd_user' => Session::get('username')
        ));
    }

    public function editSave($data)
    {
        $postData = array(
            'setup_name' => $data['setup_name'],
            'from_hour' => $data['from_hour'],
            'to_hour' => $data['to_hour'],
            'upd_date' => date('Y-m-d H:i:s'),
            'upd_user' => Session::get('username')
        );

        $this->db->update('setup', $postData,
            "`setup_id` = '{$data['setup_id']}'");
    }

    public function delete($id)
    {
        $this->db->delete('setup', "setup_id = '$id'");
    }

}