<?php

class User_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function userList(){
        return $this->db->select('SELECT id, login, role, user_position, username, is_active FROM user');
    }

    public function userSingleList($id){
        return $this->db->select('SELECT id, login, role, user_position, username, is_active FROM user WHERE id = :id', array(':id' => $id));
    }

    public function create($data){
        $this->db->insert('user', array(
            'login' => $data['login'],
            'password' => Hash::create(HASH_ALGO, $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'user_position' => $data['user_position'],
            'username' => $data['username'],
            'is_active' => $data['is_active']
        ));
    }

    public function editSave($data){
        $postData = array(
            'login' => $data['login'],
            'password' => Hash::create(HASH_ALGO, $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'position' => $data['user_position'],
            'username' => $data['username'],
            'is_active' => $data['is_active']
        );
        $this->db->update('user', $postData, "`id` = {$data['id']}");
    }

    public function delete($id){

        $result = $this->db->select('SELECT role FROM user WHERE id = :id', array(':id' => $id));

        //-- do not allow users with role = owner to be deleted --//
        if ($result[0]['role'] == 'owner')
            return false;

        $this->db->delete('user', "id = '$id'");
    }
}