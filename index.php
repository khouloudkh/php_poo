<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$myBicycle = new Bicycle('blue', 1);
echo $myBicycle->forward();
var_dump($myBicycle);

$myCar = new Car('green', 4, 'electric');
echo $myCar->forward();
var_dump($myCar);

$myTruck = new Truck('green', 3, 200, 0);

echo $myTruck->forward();
echo $myTruck->setCurrentSpeed(100);
echo $myTruck->brake();
$myTruck-> setLoading(150);
echo "<br>";
echo $myTruck->loading();
?>