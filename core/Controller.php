<?php
class Controller extends Application {
    protected $_controller, $_action;
    public $view, $db;


    public function __construct($controller, $action) {
        parent::__construct();
        $this->_controller = $controller;
        $this->_action = $action;
        $this->db = new Database();
        $this->view = new View();
    }

    public function load_model (Type $var = null)
    {
        # code...
    }
}