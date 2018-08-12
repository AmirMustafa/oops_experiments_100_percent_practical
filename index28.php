<?php
// interfaces - multiple interface

interface Description {
    // constants
    const FIRSTNAME ='Aamir';

    // non-defined methods
    function weight();
    function height();
    function width();
}

interface otherDescription {
    const FROMOTHERDESC = 'from other desc';
}

class Test implements Description, otherDescription{
    const LASTNAME = 'Mustafa';
    function weight() {

    }
    function height() {

    }
    function width() {

    }

}

$obj = new Test();
echo Test::FIRSTNAME;   // Aamir (From Interface 1)
echo Test::FROMOTHERDESC;    // Mustafa (From Interface 2)
echo Test::LASTNAME;    // Mustafa (From Class)
?>
