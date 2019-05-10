<?php
class Admin extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        $this->view->render('admin/admin');
    }

    public function usersAction()
    {
        $this->view->render('admin/users');
    }
}
