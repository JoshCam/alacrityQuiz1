<?php

class Car {
    // Properties
    private $make;
    private $model;
    private $milage;

    function __construct($make, $model, $milage) {
        $this->make = $make;
        $this->model = $model;
        $this->milage = $milage;
    }

    // Methods
    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getMileage() {
        return $this->milage;
    }
}