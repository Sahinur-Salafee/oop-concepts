<?php 
class Planet {

    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

$p1 = new Planet('Earth');
$p2 = new Planet('Mars');

if($p1 === $p2) { // now it check the object type 
    echo 'Similar Object';
} else {
    echo 'Not Similar Object';
}
