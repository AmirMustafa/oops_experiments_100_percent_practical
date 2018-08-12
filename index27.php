<?php
// interfaces -2. methods that require implementation - part 1

interface Description {
    // constants
    const FIRSTNAME ='Aamir';

    // non-defined methods
    function weight();
    function height();
    function width();
}

class Test implements Description {
    const LASTNAME = 'Mustafa';
    function weight() {

    }
    function height() {

    }
    function width() {

    }

}

$obj = new Test();
echo Test::FIRSTNAME;   // Aamir (From Interface)
echo Test::LASTNAME;    // Mustafa (From Class)
?>
