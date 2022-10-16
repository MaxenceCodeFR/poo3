<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


final class ResidentialWay extends HighWay
{
    //properties
    protected int $maxSpeed = 50;
    protected int $nbLane = 2;

    //methods
    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
            $message = 'Ok mon gars';
        } else {
            $message = 'Pas ok mon gars';
        }
        return $message;
    }
}
