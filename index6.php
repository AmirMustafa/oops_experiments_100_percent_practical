<?php
// __toString()
class Test {
    function __toString() {
        return 'you have requested me as a string';
    }
}

// instantiate
$object = new Test();
echo $object;

?>