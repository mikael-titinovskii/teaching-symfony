<?php
$car_brand = ['audi', 'bmw', 'peugeot'];
$tipe = ['car', 'bike', 'boat'];
$result = array_merge($car_brand, $tipe);
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
    if ($a == $b) {
        return 0;
    }
    if($a < $b) return -1; else 1;;
}

$a = [10, 4, 7, 30, 5];

usort($a, "znachenie");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
?>
