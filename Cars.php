
<?php

class Car {
    private int $nbWheels;

    private float $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

   public function start() {
        $this->currentSpeed = 30;
        return 'Let\'s start !';
    }

    public function forward(): string {
        $this -> currentSpeed = 20;
        return 'FORWARD';
    }

    public function brake(): string {
        $sentence = "";
        $this->currentSpeed = 15;

        while($this -> currentSpeed > 0) {
            $this -> currentSpeed-=5;
            $sentence .= "BRAKE !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels() {
        return $this->nbWheels;
    }


    public function getNbSeats() {
        return $this->nbSeats;
    }

    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }



    public function getEnergy() {
        return $this->energyLevel;
    }

    public function setEnergy() {
        return $this->energy;
    }

   
}