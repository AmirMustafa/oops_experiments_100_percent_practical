<?php
// final keyword - for methods

class Parent_Class {
    public $propParent;

    function __construct($value) {
        $this->propParent = $value;
    }
    final function echoString() {
        echo 'from the final method';
    }
}

class Child extends Parent_Class {
    public $propChild;

    function echoString() {
        echo 'from the child class';
    }
    function __construct($value, $value2) {
        parent::__construct($value);
        $this->propChild = $value2;
    }
}

$object = new Child('1st Value', 'My Value');
echo $object->echoString();

// will throw error as final class cannot be inherited
?>
