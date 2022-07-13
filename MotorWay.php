<?php

require_once 'HighWay.php';


final class MotorWay extends HighWay
{

    public function __construct(array $currentVehicles = [], int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            echo "Allowed Vehicle on MotorWay<br>";
        }else{
            echo "Vehicle not allowed on MotorWay!<br>";
        }
    }

}