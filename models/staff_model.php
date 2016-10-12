<?php

class Staff_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function staffList()
    {
        return $this->db->select('select * from staff order by staff_name asc');
    }

    public function staffSingleList($id)
    {
        return $this->db->select('select * from staff where staff_id = :id',
                array('id' => $id));
    }

    public function create($data)
    {
        $this->db->insert('staff', array(
            'is_active' => $data['is_active'],
            'staff_name' => $data['staff_name'],
            'staff_email' => $data['staff_email'],
            'staff_phone' => $data['staff_phone'],
            'staff_password' => Hash::create(HASH_ALGO, $data['staff_password'], HASH_PASSWORD_KEY),
            'ins_date' => date('Y-m-d H:i:s'),
            'upd_date' => date('Y-m-d H:i:s'),
            'ins_user' => Session::get('username'),
            'upd_user' => Session::get('username')
        ));
    }

    public function editSave($data)
    {
        $postData = array(
            'is_active' => $data['is_active'],
            'staff_name' => $data['staff_name'],
            'staff_email' => $data['staff_email'],
            'staff_phone' => $data['staff_phone'],
            'upd_date' => date('Y-m-d H:i:s'),
            'upd_user' => Session::get('username')
        );

        $this->db->update('staff', $postData,
            "`staff_id` = '{$data['staff_id']}'");
    }

    public function delete($id)
    {
        $this->db->delete('staff', "staff_id = '$id'");
    }

}