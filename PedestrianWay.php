<?php

require_once 'HighWay.php';


final class PedestrianWay extends HighWay
{

    public function __construct(array $currentVehicles = [], int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if(($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
            echo "Allowed Vehicle on PedestrianWay<br>";
        }else{
            echo "Vehicle not allowed on PedestrianWay!<br>";
        }
    }

}