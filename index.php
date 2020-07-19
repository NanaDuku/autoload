<?php



require "vendor/autoload.php";

use Vehicle\Car;

class MotorBike extends Car
{
    //inherit all properties and methods of car since they are the same things i want to use

}

$m1 = new MotorBike("susuki","2007","automatic");
echo $m1->getBrand();