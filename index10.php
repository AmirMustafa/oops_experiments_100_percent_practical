<?php
// get_declared_classes()
class Test {
    
}

// instantiate
$object = new Test();
$allClasses = get_declared_classes();
// echo '<pre>';
// var_dump($allClasses);

foreach($allClasses as $class) {
    echo $class . '<br>';
}


?>