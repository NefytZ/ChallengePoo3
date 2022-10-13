<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent:: __construct($color, $nbSeats, $energy);
        $this->setCapacity($capacity);
    }



    public function setLoading($loading) : self
    {
        switch (true) {
            case $loading < 0:
                $this->loading = 0;
                break;
            case $loading > $this->capacity:
                $this->loading = $this->capacity;
                echo 'Is Full!';
                break;
            default:
                $this->loading = $loading;
                echo 'In Filling';
        }
        return $this;
    }


    public function getCapacity() : int
    {
        return $this->capacity;
    }


    public function setCapacity($capacity) : self
    {
        $this->capacity = $capacity<0 ? 0 : $capacity;
        return $this;
    }


public function getLoading()
{
    return $this->loading;
}
}