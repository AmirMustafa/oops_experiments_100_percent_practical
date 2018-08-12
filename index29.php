<?php
// Traits

trait Description {
    // properties
    public $FIRSTNAME ='Aamir';

    function weight() {
        return $this->FIRSTNAME;
    }

}

interface otherDescription {
    const FROMOTHERDESC = 'from other desc';
}

class Test implements otherDescription{
    use Description;    // trait used or implemented in this class
    const LASTNAME = 'Mustafa';
}

$obj = new Test();
echo $obj->weight();
?>
