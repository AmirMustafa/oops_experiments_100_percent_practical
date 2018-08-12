<?php
// __construct()
class Test {
    
}

// instantiate
$object = new Test();

// var_dump($object instanceof Test);
$isinstance = $object instanceof Test;

if($isinstance) {
    echo 'i am the instance of Test class';
}


?>