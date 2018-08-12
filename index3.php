<?php

class Test {
    public $property1;    
    // public $property2;
    

    // they belong only to the class
    static $ourStatic = 0;
    
    function __construct($value) {
        $this->property1 = $value;
        // $this->setValueForProperty('property2');
        $this::$ourStatic++;
    }
    static function makeSomething($value) {
        return $value*self::$ourStatic;
    }
    // protected function setValueForProperty($value2) {
    //     $this->property2 = $value2;
    // }
}

$object = new Test('example');      // constructer executed
$object2 = new Test('example2');      // constructer executed
// echo $object->property1;
// echo $object->property2;

// echo Test::$ourStatic;
echo Test::makeSomething(3);

?>