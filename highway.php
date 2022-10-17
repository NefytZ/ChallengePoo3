<?php

require_once 'Vehicle.php';


abstract class HighWay
{

    protected array $currentVehicle;

    protected int $nbLane;

    protected int $maxSpeed;



    abstract public function addVehicle(Vehicle $vehicle); 

    
    public function __construct(array $currentVehicle, int $nbLane, int $maxSpeed)
    {
        $this->setCurrentVehicule($currentVehicle);
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }



    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicule(array $currentVehicule)
    {
       $this->currentVehicule = $currentVehicule;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}
