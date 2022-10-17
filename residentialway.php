<?php
require_once 'highway.php';

final class ResidentialWay
{
    public function __construct(array $currentVehicles, int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle($vehicle)
    {
        $currentVehicles[] = $vehicle;
    }
}
    

?> 