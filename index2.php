<?php

class Test {
    public $property1;    
    public $property2;
    
    function __construct($value) {
        $this->property1 = $value;
        $this->setValueForProperty('property2');
    }
    protected function setValueForProperty($value2) {
        $this->property2 = $value2;
    }

}

$object = new Test('example');      // constructer executed
echo $object->property1;
echo $object->property2;

?>