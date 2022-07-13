<?php

require_once 'HighWay.php';


final class ResidentialWay extends HighWay
{

    public function __construct(array $currentVehicles = [], int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
        echo("All vehicles are allowed on ResidentialWay<br>");
    }

}

?>