<?php

class Bicycle  {
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    public function forward(): string {
        $this -> currentSpeed = 15;
        return 'GO !';
    }

    public function brake(): string {
        $sentence = '';
        $this->currentSpeed = 20;

        while( $this -> currentSpeed > 0 ) {
            $this -> currentSpeed -= 10;
            $sentence .= 'BRAKE !!!';
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor( string $color ) : void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed( int $currentSpeed ) : void {
        if ( $currentSpeed >= 0 ) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function __construct( string $color ) {
        $this->color = $color;
    }
}