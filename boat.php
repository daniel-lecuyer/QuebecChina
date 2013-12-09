<?php
function partOfNumber($litersSpentPerHour, $forthAndBack) {
    return $litersSpentPerHour * $forthAndBack;
}
function literperTon($litersSpentForthAndBack, $firstTravelTons) {
    return $litersSpentForthAndBack / $firstTravelTons;
}
function partOfLitersTons($litersSpentperTon, $secondTraveltons) {
    return $litersSpentperTon * $secondTraveltons;
}
$litersSpentPerHour = 600;
$forthAndBack = 56 * 2;
$firstTravelTons = 250;
$secondTravelTons = 1250;
$litersSpentForthAndBack = partOfNumber($litersSpentPerHour, $forthAndBack);
$litersSpentperTon = literperTon($litersSpentForthAndBack, $firstTravelTons);
$litersForSecondTravel = partOfLitersTons($litersSpentperTon, $secondTravelTons);
echo PHP_EOL."The boat spent: ".$litersForSecondTravel.PHP_EOL;
