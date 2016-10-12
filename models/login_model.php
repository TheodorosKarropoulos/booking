<?php
/**
 * Created by WebSector
 */

class Login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function run()
    {
        $sth = $this->db->prepare("SELECT id, username, user_position, role FROM user WHERE login = :login
        		AND password = :password AND is_active = 1");
        $sth->execute(array(
            ':login' => $_POST['username'],
            ':password' => Hash::create(HASH_ALGO, $_POST['password'], HASH_PASSWORD_KEY)
        ));

        $data = $sth->fetch();

        $count = $sth->rowCount();
        if($count > 0)
        {
            // login
            Session::init();
            Session::set('userID', $data['id']);
            Session::set('role', $data['role']);
            Session::set('position', $data['user_position']);
            Session::set('loggedIn', true);
            Session::set('username', $data['username']);
            header('location: ' . BASE_URL . DASHBOARD_PATH);
        }
        else
        {
            // wrong credentials
            header('location: ' . BASE_URL . "login/wrong");
        }
    }
}