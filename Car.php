<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private bool $hasParkBrake = false;
    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setHasParkBrake()
    {
        if ($this->hasParkBrake == true) {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake == false) {
            $this->hasParkBrake = true;
            return 'Mise du frein à main.';
        }
        return $this;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }



    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Impossible d\'avancer. Veuillez débloquer le frein à main.');
        } else {
            return "Moteur en marche, frein à main enlever, prêt à partir: Let's Go!";
        }
    }
}
