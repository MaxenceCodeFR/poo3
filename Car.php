<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    //constants
    public const  ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];

    //properties
    protected string $energy;
    protected int $energyLevel;

    //methods
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //getters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //setters
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
