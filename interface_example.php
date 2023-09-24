<?php
/** 
 * District collection class
 * return type Array 
 */
class districtCollection implements IteratorAggregate {

    private $districts;

    function __construct($districts)
    {
        $this->districts = array();
    }

    function add($district) {
        array_push($this->districts,$district);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }

    // function getDistrict(){
    //     return $this->districts;
    // }
}

$districts = new districtCollection('Dhaka');
// $districts->getDistrict();
$districts->add('Chittagong');
$districts->add('Cumilla');
$districts->add('Thakurgoan');
$districts->add('Dinajpur');
$districts->add('Rongpur');
$districts->add('Rajshahi');

foreach($districts as $district) {
    print_r($district . '<br>');
}