<?php
require_once 'bicycle.php';
require_once 'Cars.php';

$velib = new Bicycle('green');
$bmw = new Car('black', 5, 'gazoil' );
$aygo = new Car ('white', 4, 'fuel' );
$bmx = new Bicycle ('white');


echo 'The Bmw ' . $bmw->forward().PHP_EOL;
echo $bmw->brake().PHP_EOL;

echo 'The velib ' . $velib->forward().PHP_EOL;
echo $velib->brake().PHP_EOL;

echo 'The Aygo ' . $aygo->forward().PHP_EOL;
echo $aygo->brake().PHP_EOL;


echo 'The bmx ' . $bmx->forward().PHP_EOL;
echo $bmx->brake().PHP_EOL;
