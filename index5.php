<?php
// __call()
class Test {
    function __call($method, $args) {
        echo $method . '() method does not exist';
        echo '<br>';
        // displaying error message of arguments passed
        foreach($args as $value) {
            echo 'why did you use this argument: '.$value.'<br>';
        }
    }
}

// instantiate
$object = new Test();
$object->doesnotExist('something', 'arg2', 1234, 'whoo'); 

?>