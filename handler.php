<?php
    include_once "Car.php";

    if (isset($_POST["submit"])) {
        $myCar = new Car($_POST["make"], $_POST["model"], $_POST["milage"]);
        echo "Your Car is a " . $myCar->getMake() . " " . $myCar->getModel();
    }