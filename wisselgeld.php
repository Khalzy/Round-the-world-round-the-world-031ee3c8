<?php
$moneyChange =  (float) round($argv[1], 2, PHP_ROUND_HALF_UP);

const GELDEENHEID = [
    "50" => "Euro",
    "20" => "Euro",
    "10" => "Euro",
    "5" => "Euro",
    "2" => "Euro",
    "1" => "Euro",
    "0.50" => "Cent",
    "0.20" => "Cent",
    "0.10" => "Cent",
    "0.05" => "Cent",
    "0.5" => "Cent",
    "0.2" => "Cent",
    "0.1" => "Cent",
    "0.05" => "Cent",
    "0.02" => "Cent",
    "0.01" => "Cent",
];



coinsBack(GELDEENHEID, $moneyChange);

function coinsBack($geldeenheid, $moneyChange)
{
    foreach ($geldeenheid as $geld => $soort) {
        $geld = (float) $geld;

        if (floor($moneyChange / $geld) > 0) {
            $count = floor($moneyChange / $geld);
            echo "$count X $geld $soort" . PHP_EOL;
            $moneyChange = $moneyChange -  ($count * $geld);
            $moneyChange = round($moneyChange, 2);
        }
    }
}
