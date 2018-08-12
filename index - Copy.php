<?php

class Test {
    //properties = variables
    protected $ourProperty = 'i am here';  // public is must for properties
    // public $ourProperty = 'i am here';  // public is must for properties

    //methods = functions
    
    function getProperty() {            // Getter - public method
        return $this->ourProperty;
    }
    function setProperty($value) {      // Setter - public method
        $this->ourProperty = $value;
    }
    function returnString() {           // public is by default for methods
        echo 'from inside object '. $this->ourProperty;
    }
    function echoOut() {
        $this->returnString();
    }
    
    // function returnString() {           // public is by default for methods
    //     echo 'from inside object';
    // }
}

$object = new Test();
// var_dump($object->ourProperty);
// echo $object->ourProperty;      // accessing properties
// echo "<br>";
// echo $object->echoOut();   // accessing methods
// echo $object->returnString();   // accessing methods

// $object->ourProperty = 'value changed';
//echo $object->ourProperty;

$object->setProperty('new value');      // setting new value - setter
echo $object->getProperty();            // getting new value - getter

?>