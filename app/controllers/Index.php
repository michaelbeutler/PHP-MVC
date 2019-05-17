<?php
class Index extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        dnd($_SESSION);
        $this->view->render('index/index');
    }
}
