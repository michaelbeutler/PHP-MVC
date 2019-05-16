<?php
class Login extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('User');
    }

    public function indexAction()
    {
        $this->view->render('login/login');
    }

    public function loginAction() {
        if ($_POST) {
            $user = $this->UserModel->findByEmail($_POST['email']);
        }
        $this->view->render('login/login');
    }
}
