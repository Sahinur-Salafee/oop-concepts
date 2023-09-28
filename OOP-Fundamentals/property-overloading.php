<?php

class MotorCycle {

    private $displacement, $capacity, $mileage;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->displacement = $displacement;
        $this->capacity = $capacity;
        $this->mileage = $mileage;
    }

    function getDisplacement() {
        return $this->displacement;
    }

    function setDisplacement($displacement) {
        $this->displacement = $displacement;
    }
}

$pulsar = new MotorCycle('150cc','15ltr','50');
echo $pulsar->getDisplacement();