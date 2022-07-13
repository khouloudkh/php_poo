<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    protected string $energy;

    protected int $energyLevel;

    protected int $storageCapacity;

    protected int $loading = 0;


    public function __construct(string $color, int $nbSeats, int $storageCapacity, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
    }

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

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function loading(): string
    {
        $sentence = "";
        if ($this->loading < $this->storageCapacity) {
            $sentence .= "in filling<br>";
            return $sentence;
        } else {
            $sentence .= "full<br>";
            return $sentence;
        }
    }
}
?>