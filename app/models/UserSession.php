<?php
class UserSession extends Model
{
    public function __construct()
    {
        $table = 'user_session';
        parent::__construct($table);
    }

    public static function getFromCookie()
    {
        $user_session = new self();
        if (Cookie::exists(REMEMBER_COOKIE_NAME)) {  
            $user_session = $user_session->findFirst([
                'conditions' => "user_agent = ? AND session = ?",
                'bind' => [Session::uagent_no_version(), Cookie::get(REMEMBER_COOKIE_NAME)]
            ]);
        }
        if (!$user_session) return false;
        return $user_session; 
    }
}
