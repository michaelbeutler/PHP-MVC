<?php
class Index extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        $this->view->render('index/index');
    }
}
