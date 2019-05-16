<?php
class Login extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('User');
    }

    public function indexAction()
    {
        $email = '';
        if ($_POST) {
            $user = $this->UserModel->findByEmail($_POST['email']);
            $email = $_POST['email'];
        }
        $this->view->render('login/login');
    }
}
