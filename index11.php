<?php
// class_exist()
class Test {
    
}

// instantiate
$object = new Test();

echo class_exists('Test');      // 1
var_dump(class_exists('Test')); //boolean true


?>