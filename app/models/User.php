<?php
class User extends Model
{
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

    public $id;
    public $email;
    public $password;
    public $create_date;
    public $update_date;

    public function __construct($user = false)
    {
        $table = 'user';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_COOKIE_NAME;
        $this->_softDelete = true;
        if ($user != '') {
            if (is_int($user)) {
                $u = $this->_db->findFirst($table, ['conditions' => 'id = ?', 'bind' => [$user]]);
            } else {
                $u = $this->_db->findFirst($table, ['conditions' => 'email = ?', 'bind' => [$user]]);
            }
            if ($u) {
                foreach ($u as $key => $value) {
                    $this->$key = $value;
                }
            }
        }
    }

    public function findByEmail($email)
    {
        return $this->findFirst(['conditions' => 'email = ?', 'bind' => [$email]]);
    }

    public function login($rememberMe = false)
    {
        Session::set($this->_sessionName, $this->id);
        if ($rememberMe) {
            $hash = md5(uniqid() + rand(0, 100));
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_COOKIE_EXPIRY);
            $fields = ['session' => $hash, 'user_agent' => $user_agent, 'user_id' => $this->id];
            $this->_db->query("DELETE FROM `user_session` WHERE `user_id` = ? AND `user_agent`= ?", [$this->id, $user_agent]);
            $this->_db->insert('user_session', $fields);
        }
    }
}
