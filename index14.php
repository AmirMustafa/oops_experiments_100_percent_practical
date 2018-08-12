<?php
// inheritance
class Parent1 {
    public $prop1 = 'I am from parent class';
}

class Child1 extends Parent1 {
    public $propChild = 'I am from child class';
}


// instantiate
$object = new Child1();
// var_dump($object);
echo $object->prop1;


?>
