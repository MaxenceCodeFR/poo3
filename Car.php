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
    private bool $hasParkBrake;

    //methods
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function start(): string
    {
        if ($this->getHasParkBrake() === true) {
            throw new Exception('ATTENTION FREIN A MAIN');
        } else {
            $this->currentSpeed = 12;
            return 'Je sais pas si ça fonctionne en vrai la quête avait l\'air plutot simple';
        }
    }

    //getters
    
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //setters
     public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    
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
