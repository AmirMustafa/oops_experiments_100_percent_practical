<?php
// abstract class - abstract method

abstract class Parent_Class {
    public $property;

    function __construct() {
        $this->property = 'value from constructor';
    }
    // abstract methods can be declared inside abstract class
    abstract function iAmSpecial();
}

class Child extends Parent_Class {

    // abstract methods can be defined inside child
    function iAmSpecial() {
        echo 'finally i work';
    }
}

$obj = new Child();  // the only purpose of abstract class is to be inherited
echo $obj->iAmSpecial();

// O/p: value from constructor
