<?php
// overriding

class Parent_Class {
    public function doSomething() {
        echo 'I am from Parent class';
    }
}

class Child extends Parent_Class {
    function doSomething() {
        echo 'I have been overriden';
    }
}

$object = new Child();
echo $object->doSomething();
?>
