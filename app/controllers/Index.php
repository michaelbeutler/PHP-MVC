<?php
class Index extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        $database = Database::getInstance();
        $users = $database->find('user', [
            'conditions' => 'admin = ?',
            'bind' => [0],
            'order' => 'username, firstname, lastname',
            'limit' => 5
        ]);
        dnd($users);
        $this->view->render('index/index');
    }
}
