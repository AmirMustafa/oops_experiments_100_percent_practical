<?php
// parent keyword with constructor

class Parent_Class {
    public $propParent;

    function __construct($value) {
        $this->propParent = $value;
    }
}

class Child extends Parent_Class {
    public $propChild;

    function __construct($value, $value2) {
        parent::__construct($value);
        $this->propChild = $value2;
    }
}

$object = new Child('value from Parent constructor', 'value from Child constructor');
// echo $object->propChild;
echo $object->propParent;
?>
