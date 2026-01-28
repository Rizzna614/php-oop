<?php

//1.uzd
echo "1.uzd \n";

$fruits = ["Ābols", "Banāns", "Ķirsis", "Dateles"];

echo $fruits[1];


//2.uzd
echo "\n 2.uzd \n";

$ages =
[
    "Alise" => 30,
    "Bobs" => 25,
    "Čārlijs" => 35,
];

echo $ages["Bobs"];


//3.uzd
echo "\n 3.uzd \n";

$students = array (
    array("Vārds" => "Džons", "Vecums" => 20, "Atzīmes" => [90,85,88]),
    array("Vārds" => "Džena", "Vecums" => 22, "Atzīmes" => [92,80,84]),
    array("Vārds" => "Džo", "Vecums" => 21, "Atzīmes" => [78,85,90]),
);


for ($i = 0; $i < count($students); $i++)
    {
        echo "Vārds: ". $students[$i]["Vārds"]. ", ";
        $vidAtzime;
        $vidAtzime = ($students[$i]["Atzīmes"][0] + $students[$i]["Atzīmes"][1] + $students[$i]["Atzīmes"][2]) / 3;
        echo "Vidējā atzīme: ". $vidAtzime. "; \n";
    };


//4.uzd
echo "\n 4.uzd \n|| ";

foreach($students as $i)
    {
        echo "Vārds: ". $i["Vārds"]. ", Vecums: ". $i["Vecums"]. ", Atzīmes: ";
        for ($n = 0; $n < 3; $n++)
            {
                echo $i["Atzīmes"][$n]. " ";
            }
        echo "||";
    }



//5.uzd
echo "\n 5.uzd \n";

$assocAnimal =
[
    "Lauva" => [250, "ziditajs"],
    "Laupijums" => ["gazele", "zebra"],
];

$animals = ["gazele", "zebra", "ezis", "cuka", "zirafe"];

foreach ($animals as $i)
    {
        var_dump($i);
    }


//6.uzd
echo "\n 6.uzd \n";

$colors = ["red", "blue", "green", "yellow"];

$stringColors = "Colors: ". $colors[0]. ", ". $colors[1]. ", ". $colors[2]. ", ". $colors[3];
echo $stringColors;

//7.uzd
echo "\n 7.uzd \n";

$person = array(
    array("vārds" => "Jānis", "vecums" => 20, "e-pasts" => "janis@janis.lv", "valodas" => "PHP, Python, Java"),
    array("vārds" => "Antra", "vecums" => 34, "e-pasts" => "antra@antra.com", "valodas" => "HTML, Javascript, SQL"),
);


//papild uzd
echo "\n papild uzd \n";

$groupedOrders = array(
    array("order_id" => 1, "customer" => "Alise", "products" => ["Grāmata", "Pildspalva"]),
    array("order_id" => 2, "customer" => "Bobs", "products" => ["Dators", "Pelīte"]),
    array("order_id" => 3, "customer" => "Čārlijs", "products" => ["Kafijas automāts"]),
);

echo $groupedOrders[1]["products"][0]; // - ka pieklut viniem



