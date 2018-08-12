<?php
// overriding and accessing the parent keyword

class Parent_Class {
    public function doSomething() {
        echo 'I am from Parent class<br>';
    }
}

class Child extends Parent_Class {
    function doSomething() {
        parent::doSomething();
        echo 'I have been overriden';
    }
}

$object = new Child();
echo $object->doSomething();
?>
