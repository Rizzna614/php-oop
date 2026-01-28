<?php

//1.uzd
echo "\n 1.uzd \n";
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $i)
    {
        if ($i % 2 == 0)
            {
                echo $i. "; ";
            }
    }


//2.uzd
echo "\n 2.uzd \n";

$products =
[
    "Piens" => 1.5,
    "Maize" => 1.25,
    "Siers" => 0.8,
];

$mostExpenisve = 0;
$mostExpensiveName = "";
$kopejaCena = 0;

echo "Produktu saraksts: ";
foreach ($products as $nosk => $cena)
    {
        $kopejaCena = $kopejaCena + $cena;
        echo $nosk. " - ". $cena. "EUR; ";
        if ($mostExpenisve < $cena)
            {
                $mostExpenisve = $cena;
                $mostExpensiveName = "\n Dargakais: ". $nosk. " - ". $cena. "EUR; \n";
            }
    }

echo $mostExpensiveName;
echo "Kopeja produktu cena: ". $kopejaCena. "EUR;";


//3.uzd
echo "\n 3.uzd \n";

$employees = array (
    array("Ronalds", "Deputats", 3000, 120),
    array("Alfrēds", "Manadžeris", 2500, 160),
    array("Emīls", "Pārdevējs", 1200, 100),
);

$lielakaLikme = 0;
$kuramLielakaLikme = "";
foreach ($employees as $i)
    {
        echo "Vārds: ". $i[0]. ", Alga mēnesī: ". $i[2]. "EUR; ";
        if ($lielakaLikme < $i[2] / $i[3])
            {
                $lielakaLikme = $i[2] / $i[3];
                $kuramLielakaLikme = $i[0];
            }
    }

echo "\n Lielaka stundas likme ir darbiniekam ". $kuramLielakaLikme. " un ta ir ". $lielakaLikme. "EUR/h; \n";


//4.uzd
echo "\n 4.uzd \n";

class Person
{
    private $name;
    private $age;

    function __construct ($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    function introduce ()
    {
        echo "Sveiki, mani sauc ". $this -> name. " un man ir ". $this -> age. " gadi.";
    }
}

$person1 = new Person("Markuss", 13);
$person1 -> introduce();
echo "\n";
$person2 = new Person("Gabriels", 25);
$person2 -> introduce();


//5.uzd
echo "\n 5.uzd \n";

class Student
{
    private $name;
    private $grades = [];

    function __construct ($name, $grades)
    {
        $this -> name = $name;
        $this -> grades = $grades;
    }

    function getAverage ()
    {
        $avgGrade = 0;
        foreach ($this -> grades as $i)
            {
                $avgGrade = $avgGrade + $i;
            }
        //echo sizeof($this -> grades);
        $avgGrade = $avgGrade / sizeof($this -> grades);
        echo "Videja atzime sim studentam: ". $avgGrade. "; \n";
    }
}
