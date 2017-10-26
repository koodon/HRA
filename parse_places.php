<?php

$fullforecast = simplexml_load_file('http://www.ilmateenistus.ee/ilma_andmed/xml/forecast.php')
    or die("Error: Cannot create object");
$place = $fullforecast -> forecast[0] -> day [0] -> place[0] -> name[0];
echo $place;

//www.ilmateenistus.ee/ilma_andmed/xml/forecast.php
//sorax.org