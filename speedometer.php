<?php



class Speedometer
{

    const MILES = 0.6212;
    const KM = 1.609;

    public static function convertMilesToKm($number)
    {

        return $number = $number * self::KM;


    }

    public static function convertKmToMiles($number)
    {
        return $number = $number * self::MILES;
    }
}