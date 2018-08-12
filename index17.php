<?php
// staticc in case of inheritance
class Parent1 {
    static $prop1 = 'I am from parent class';

    function __construct() {
        self::$prop1 = 100;
    }
}

class Child1 extends Parent1 {
    public $propChild = 'I am from child class';

    function __construct() {
        self::$prop1 = 200;
    }
}

class GrandChild1 extends Child1 {
    private $propGrandChild = 'I am from grandchild class';

    function getPropGrandChild($name) {
        return $this->$name;
    }
}

// instantiate
$object = new GrandChild1();

echo GrandChild1::$prop1;

?>
