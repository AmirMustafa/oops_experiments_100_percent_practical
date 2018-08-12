<?php
// __construct()
class Test {
    public $prop1;
    public $prop2;
    function __construct($val1 = null, $val2 = null) {
        $this->prop1 = $val1;
        $this->prop2 = $val2;
        $this->showMessage();
    }

    protected function showMessage() {
        echo 'i am from method';
    }
}

// instantiate
$object = new Test();
// var_dump($object);


?>