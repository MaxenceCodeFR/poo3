<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$camionPouetPouet = new Truck('black', 3, 90);

$alfaromeo = new Car('green', 4, 400);
$bike = new Bicycle('blue', 12);
$skateboard = new Bicycle('black', 0);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();


echo $motorWay->addVehicle($alfaromeo);



echo $residentialWay->addVehicle($camionPouetPouet); // Aucun accès vu qu'il ne fait pas parti de 


echo $pedestrianWay->addVehicle($bike);
echo $pedestrianWay->addVehicle($skateboard);
