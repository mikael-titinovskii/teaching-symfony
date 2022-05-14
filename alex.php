<?php

//sort
$a = [1, 2, 3, 4];
$b = sort($a);
print_r($a);
echo "\n";

//rsort
$a = [1, 2, 3, 4];
rsort($a);
print_r($a);
echo "\n";

//usort
function sortirovka($a, $b){
    if($a==$b){
        return 0;
    }
    if($a<$b){
        return -1;
    }
    else{
        return 1;
    };
}
$a = [4, 2, 1, 3];
usort($a, "sortirovka");
foreach($a as $key => $value){
    echo "$key: $value \n";
}
