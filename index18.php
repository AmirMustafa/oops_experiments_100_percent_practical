<?php
// final keyword - for class

final class Parent_Class {
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

$object = new Child('1st Value', 'My Value');
echo $object->propParent;

// will throw error as final class cannot be inherited
?>
