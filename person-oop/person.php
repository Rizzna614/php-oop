<?php

Class Person
{
    private $name;
    private $age;
    private static $totalPersonCount = 0;

    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;

        self::$totalPersonCount++;
    }

    function showInfo()
    {
        echo $this -> name, " ", $this -> age, "gadi \n";
    }

    function setName($newName)
    {
        $this -> name = $newName;
    }

    public static function totalAmountOfPeople()
    {
        return self::$totalPersonCount;
    }
}

$person1 = new Person ("Anna", 30);
$person1 -> showInfo();
$person1 -> setName("Elza");
$person1 -> showInfo();
echo "Total amount of people rn: ", Person::totalAmountOfPeople(), "\n";
$person40 = new Person ("Burkans", 54);
$person61 = new Person ("Rolands", 45);
echo "Total amount of people rn: ", Person::totalAmountOfPeople(), "\n";


