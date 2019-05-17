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

    public static function currentLoggedInUser()
    {
        if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
            self::$currentLoggedInUser = new User((int)Session::get(CURRENT_USER_SESSION_NAME));
        }
        return self::$currentLoggedInUser;
    }

    public function login($rememberMe = false)
    {
        Session::set($this->_sessionName, $this->id);
        if ($rememberMe) {
            $hash = md5(uniqid());
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_COOKIE_EXPIRY);
            $fields = ['session' => $hash, 'user_agent' => $user_agent, 'user_id' => $this->id];
            $this->_db->query("DELETE FROM `user_session` WHERE `user_id` = ? AND `user_agent`= ?", [$this->id, $user_agent]);
            $this->_db->insert('user_session', $fields);
        }
    }

    public static function loginUserFromCookie()
    {
        $user = null;
        $user_session = UserSession::getFromCookie();
        if ($user_session->user_id != '') {
            $user = new self((int)$user_session->user_id);
        }
        if ($user) {
            $user->login();
        }
        return $user;
    }

    public function logout()
    {
        $user_session = UserSession::getFromCookie();
        if ($user_session) $user_session->delete();
        Session::delete(CURRENT_USER_SESSION_NAME);
        if (Cookie::exists(REMEMBER_COOKIE_NAME)) {
            Cookie::delete(REMEMBER_COOKIE_NAME);
        }
        self::$currentLoggedInUser = null;
        return true;
    }
}
