<?php
// property_exists, method_exists
class Test {
    protected $prop1;    

    function myMethod () {

    }
}

// instantiate
$object = new Test();

var_dump(property_exists($object, 'prop2'));
var_dump(method_exists($object, 'myMethods'));


?>