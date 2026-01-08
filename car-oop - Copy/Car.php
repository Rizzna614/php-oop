<?php

Class Car
{
    private $id;
    private $name;
    private $distance;
    private static $totalCars = 0;

   function __construct($id, $name, $distance)
   {
        $this -> id = $id;
        $this -> name = $name;
        $this -> distance = $distance;

        Car::$totalCars++;
   }

    /*function setInfo($id, $name, $distance)
   {
        $this -> id = $id;
        $this -> name = $name;
        $this -> distance = $distance;
   }*/

    function printInfo()
    {
        echo "ID-", $this -> id, " ", $this -> name, " ", $this -> distance, "km \n";
    }

    function setDistance($distance)
    {
        if ($distance >= 0)
            {
                $this -> distance = $distance;
            }
    }

    function drive($add)
    {
        if ($add >= 0)
            {
                $this -> distance += $add;
            } else
            {
                echo "You cant drive negative km \n";
            }
    }

    public static function getTotalCars()
    {
        echo "Total number of cars: ", Car::$totalCars, "\n";
    }
}

/*
$car1 = new Car;
$car1 -> setInfo(1, "Volvo", 92000);
$car1 -> printInfo();
*/

$car2 = new Car(2, "BMW", 300000);
$car2 -> printInfo();
$car2 -> setDistance(100000);
$car2 -> printInfo();
$car2 -> drive(1000);
$car2 -> printInfo();
$car2 -> drive(-1000);
$car2 -> printInfo();
Car::getTotalCars();
$car3 = new Car(3, "KIA", 50000);
$car3 -> printInfo();
Car::getTotalCars();



