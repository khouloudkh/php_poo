<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Speedometer.php';

$myBicycle = new Bicycle('blue', 1);
echo $myBicycle->forward();
var_dump($myBicycle->switchOn());
var_dump($myBicycle->switchOff());
var_dump($myBicycle);

$myCar = new Car('green', 4, 'electric');
echo $myCar->forward();
var_dump($myCar->switchOn());
var_dump($myCar->switchOff());
var_dump($myCar);
/* *****challenge 4****** */
try {
    $myCar->start();
} catch (Exception $e) {
    echo "Exception received : " . $e -> getMessage();
    $myCar -> setParkBrake(false);
    echo "<br> Handbrake off !!<br>";
} finally {;
    echo "Ma voiture roule comme un donut.<br></br>";
}

$myTruck = new Truck('green', 3, 200, 0);

echo $myTruck->forward();
echo $myTruck->setCurrentSpeed(100);
echo $myTruck->brake();
$myTruck-> setLoading(150);
echo "<br>";
echo $myTruck->loading();
echo "<br>";

/* *****challenge 3****** */
echo "Test Bicycle<br>";

$bike = new Bicycle('blue', 1);
$way = new ResidentialWay();
$way->addVehicle($bike);
//var_dump($way);

$bike = new Bicycle('blue', 1);
$way = new PedestrianWay();
$way->addVehicle($bike);
//var_dump($way);

$bike = new Bicycle('blue', 1);
$way = new MotorWay();
$way->addVehicle($bike);
//var_dump($way);
echo "<br>";
echo "Test Car<br>";

$car = new Car('grey', 4, 'electric');
$way = new ResidentialWay();
$way->addVehicle($car);
//var_dump($way);

$car = new Car('grey', 4, 'electric');
$way = new PedestrianWay();
$way->addVehicle($car);
//var_dump($way);

$car = new Car('grey', 4, 'electric');
$way = new MotorWay();
$way->addVehicle($car);
//var_dump($way);
echo "<br>";
echo "Test Skateboard<br>";

$skate = new Skateboard('black', 1);
$way = new ResidentialWay();
$way->addVehicle($skate);
//var_dump($way);

$skate = new Skateboard('black', 1);
$way = new PedestrianWay();
$way->addVehicle($skate);
//var_dump($way);

$skate = new Skateboard('black', 1);
$way = new MotorWay();
$way->addVehicle($skate);
//var_dump($way);


/* *****challenge 6****** */
echo round(Speedometer::KMtoMILES(10), 2);
echo "<br>";
echo round(Speedometer::MILEStoKM(6.21), 2);
echo "<br>";
?>