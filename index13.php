<?php
// get_class_vars, get_class_methods
class Test {
    protected $prop1;
    public $prop2;
    public $prop3;

    function myMethod () {

    }
}

// instantiate
$object = new Test();
$vars = get_class_vars('Test');             // only public properties

echo '<pre>';
var_dump($vars);

$method = get_class_methods('Test');        // only public methods
var_dump($method);

?>
