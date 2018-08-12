<?php
// abstract class - how to use

abstract class Parent_Class {
    public $property;

    function __construct() {
        $this->property = 'value from constructor';
    }
}

class Child extends Parent_Class {
                                        // evrn without writing parent::__construct() here value of property assigned
}

$obj = new Child();  // the only purpose of abstract class is to be inherited
echo $obj->property;

// O/p: value from constructor
