<?php

$carbrand  = ['audi', 'bmw', 'peugeot'];
$type = ['car', 'bike', 'boat'];
$result = array_merge($carbrand, $type);
print_r($result);
?>

    // rsort            от большему к меньшему

<?php
$sequence = [10, 20, 100, 3];
sort ($sequence);
print_r($sequence);
?>

    // usort            сортировка по функции

<?php
function znachenie($a, $b)
{
    if ($a < $b){
        return -1;
    } else {
        return 1;
    }

    $a = [10, 4, 7, 30, 5];

    usort($a, "znachenie");

    foreach ($a as $key => $value) {
        echo "$key: $value\n";
    }
}
?>
