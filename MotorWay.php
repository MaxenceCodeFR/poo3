<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

final class MotorWay extends HighWay
{
    //properties
    protected int $maxSpeed = 130;
    protected int $nbLane = 4;

    //methods
    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
            $message = "A fond les ballon tocard";
        } else {
            $message = "Bouge ton taco d'ici papito";
        }
        return $message;
    }
}
