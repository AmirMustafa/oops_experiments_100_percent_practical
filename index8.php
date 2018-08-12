<?php
// __construct()
class Test {
    public $prop1;
    public $prop2;
    function __construct($val1 = null, $val2 = null) {
        $this->prop1 = $val1;
        $this->prop2 = $val2;
    }

    function __destruct() {
        echo 'this guy is deleting me<br>.';
    }
}

// instantiate
$object = new Test();
unset($object);
// var_dump($object);

echo 'what a nice day <br>';


?>