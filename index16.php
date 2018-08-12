<?php
// private
class Parent1 {
    private $prop1 = 'I am from parent class';
    protected $prop2 = 'I am from parent class';
}

class Child1 extends Parent1 {
    public $propChild = 'I am from child class';
}

class GrandChild1 extends Child1 {
    private $propGrandChild = 'I am from grandchild class';

    function getPropGrandChild($name) {
        return $this->$name;
    }
}

// instantiate
$object = new GrandChild1();
// var_dump($object);
// echo $object->propGrandChild; //throws error cannot access it, solution we have to access it like protected i.e. getter and setter

echo $object->getPropGrandChild('propGrandChild');          // private of only own class can be accessed
echo $object->getPropGrandChild('prop2');                   // protected can be accessed of parent

?>
