<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    protected string $energy;

    protected int $energyLevel;

    private bool $hasParkBrake=true;

    //constructeur
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    //setters and getters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake):void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    //méthode
    public function start(): bool
    {
        if ($this->hasParkBrake) {
            throw new Exception("the handbrake is active!");
        }
        $this->currentSpeed = 0;
        return "Get started !<br>";
    }
}