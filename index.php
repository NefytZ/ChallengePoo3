<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require 'Truck.php';
require 'bus.php';

$renault = new Truck('green', 5, 100, 100,);
var_dump($renault->setLoading(99));
var_dump($renault->setLoading(200));
echo 'The Renault ' . $renault->forward();
echo $renault->brake();

$velib = new Bicycle('green', 1);
$bmw = new Car('black', 5, 'gazoil');
$aygo = new Car('white', 4, 'fuel');
$bmx = new Bicycle('white', 1);

echo 'The Bmw ' . $bmw->forward();
echo $bmw->brake();

echo 'The velib ' . $velib->forward();
echo $velib->brake();

echo 'The Aygo ' . $aygo->forward();
echo $aygo->brake();


echo 'The bmx ' . $bmx->forward();
echo $bmx->brake();
// POO3
$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2, 'fuel');
$schoolBus = new Bus('yellow', 5, 100, 100,);
VAR_DUMP($tesla);
VAR_DUMP($ferrari);





// Actionnement du frein à main au démarrage
echo $ferrari->setHasParkBrake();

try {
    echo $ferrari->start() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    echo $ferrari->setHasParkBrake() . PHP_EOL;
} finally {
    echo "Ma voiture roule comme un donut";
}
