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
$alfaromeo->setHasParkBrake(true);
$bike = new Bicycle('blue', 12);
$skateboard = new Bicycle('black', 0);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

try {
    echo $alfaromeo->start();
} catch (Exception $e) {
    echo $e->getMessage() . ' enlève le main a frein';
    $alfaromeo->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un DONUT';
}
echo $motorWay->addVehicle($alfaromeo);

echo $motorWay->addVehicle($alfaromeo);



echo $residentialWay->addVehicle($camionPouetPouet); // Aucun accès vu qu'il ne fait pas parti de 


echo $pedestrianWay->addVehicle($bike);
echo $pedestrianWay->addVehicle($skateboard);
