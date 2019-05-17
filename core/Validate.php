<?php
class Validate
{
    private $_passed = false, $_errors = [], $_db = null;

    public function __construct() {
        $this->_db = Database::getInstance();
    }

    public function check($source, $items=[])
    {
        $this->_errors = [];
        foreach ($items as $item => $rules) {
            $item = Input::sanitize($item);
            $display = $rules['display'];
            foreach ($rules as $rule => $rule_value) {
                $value = Input::sanitize(trim($source[$item]));
                if 
            }
        }
    }
}
