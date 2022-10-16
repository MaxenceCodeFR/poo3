<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

final class PedestrianWay extends HighWay
{
    //properties
    protected int $maxSpeed = 10;
    protected int $nbLane = 1;

    //methods
    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
            $message = "C'est bon mais roule trkl frr";
        } else {
            $message = "Interdit au pas riche au mazout";
        }
        return $message;
    }
}
