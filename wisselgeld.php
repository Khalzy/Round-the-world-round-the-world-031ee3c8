<?php

$bedrag =  (float) round($argv[1], PHP_ROUND_HALF_UP);

const GELDEENHEID = array(

    "50 " => "Euro",
    "20 " => "Euro",
    "10 " => "Euro",
    "5 " => "Euro",
    "2 " => "Euro",
    "1 " => "Euro",
    "0.50 " => "Cent",
    "0.25 " => "Cent",
    "0.20 " => "Cent",
    "0.10 " => "Cent",
    "0.05 " => "Cent",
    "0.5 " => "Cent",
);


foreach (GELDEENHEID as $geld => $soort) {
    $geld = (float) $geld;
    $bedrag = round($bedrag, 2, PHP_ROUND_HALF_UP);
    $count = floor($bedrag / $geld);


    if (floor($bedrag / $geld)) {
        $count =  floor($bedrag / $geld);
        echo $count . " * $geld $soort" . PHP_EOL;
        $bedrag = $bedrag -  round($geld, 2,);
    }
}
