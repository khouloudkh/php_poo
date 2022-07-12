<?php
require_once 'Bicycle.php';
require_once 'Car.php';

// Instanciation d'un nouvel objet $bike
$bike = new Bicycle("green"); 

$bike->setColor("red");
$bike->getCurrentSpeed();
$bike->dump();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo "<br></br>";

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("blue");
$rockrider->setColor("yellow");

// Instanciation d'un nouvel objet $tornado 
$tornado = new Bicycle("black");
$tornado->setColor("black");
$tornado->forward();

// Instanciation d'un nouvel objet $myCar
$myCar = new Car('grey', 5, 'diesel');

//Moving myCar
echo $myCar->start() . '<br>';
echo $myCar->forward() . '<br>';
echo $myCar->brake() . '<br>';
echo "NbWheels = " . $myCar->getNbWheels() . '<br>';
echo "CurrentSpeed = " . $myCar->getCurrentSpeed() . '<br>';
echo "Color = " . $myCar->getColor() . '<br>';
echo "NbSeats = " . $myCar->getNbSeats() . '<br>';
echo "Energy = " . $myCar->getEnergy() . '<br>';
echo "EnergyLevel = " . $myCar->getEnergyLevel() . '<br>';
?>