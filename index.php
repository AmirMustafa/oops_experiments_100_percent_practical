<?php

class Test {
    //properties = variables
    protected $ourProperty = 'i am here';  // public is must for properties
    protected $ourProperty2 = '2';  // public is must for properties
    protected $ourProperty3 = '3';  // public is must for properties
    protected $ourProperty4 = '4';  // public is must for properties
    protected $ourProperty5 = '5';  // public is must for properties
    // public $ourProperty = 'i am here';  // public is must for properties

    //methods = functions
    
    // dynamic getter
    function getProperty($name) {            // Getter - public method
        return $this->$name;
    }
    function __get($name) {
        echo "The property $name does not exist";
    }
    function setProperty($name, $value) {      // Setter - public method
        $this->$name = $value;
    }
    function __set ($name, $value) {
        echo 'The property named: '.$name.' does not exist, there for value cannot be set';
    }
    
    /*function getProperty() {            // Getter - public method
        return $this->ourProperty;
    }
    function setProperty($value) {      // Setter - public method
        $this->ourProperty = $value;
    }*/
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

// $object->setProperty('new value');      // setting new value - setter
// $object->setProperty('ourProperty5', 'property 5 value changed');      // setting new value - setter
$object->setProperty('ourProperty6', 'property 5 value changed');      // setting new value - setter
// echo $object->getProperty();            // getting new value - getter
echo $object->getProperty('ourProperty5');            // getting new value - getter

?>