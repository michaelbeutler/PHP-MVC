<?php
class User extends Model
{
    private $_isLoggedIn, $_sessionName, $_cookieName;

    public $id;
    public $email;
    public $password;
    public $create_date;
    public $update_date;

    public function __construct($user=false) {
        $table = 'user';
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        //$this->_cookieName = REMEBER_ME_COOKIE_NAME;
        if ($user != false) {
            if (is_int($user)) {
                // by id
                $result = $_db->select('SELECT * FROM `user` WHERE `id`={ $user }');
                echo $result;
                if ($result != false) {
                    
                }
            } else if (is_string($user)) {
                // by email
            }
        }
    }

    public function findByEmail($email) {

    }

    public function login($email, $password) {
        if (password_verify($password, $db_password)) {
            Session::set($this->sessionName, $this->id);
            
            return true;
        } else {
            return false;
        }
    }

}
