<?php

$person = array(
    array("vārds" => "Jānis", "vecums" => 20, "e-pasts" => "janis@janis.lv", "valodas" => ["PHP", "Python", "Java"]),
    array("vārds" => "Antra", "vecums" => 34, "e-pasts" => "antra@antra.com", "valodas" => ["HTML", "Javascript", "SQL"]),
);

echo "<ul>";
foreach ($person as $i)
    {
        echo "<li>";
        echo "<h1>". $i["vārds"]. "</h1>";
        echo "<p>". $i["vecums"]. "</p>";
        echo "<p>". $i["e-pasts"]. "</p>";
        echo "<ul>";
        foreach ($i["valodas"] as $n)
            {
                echo "<li>". $n. "</li>";
            }
        echo "</ul>";
        echo "</li>";
    }
echo "</ul>";






