<?php
include "./strlen.php";

function fn_strtoupper($string){
    $upper = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $lower = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    for ($j = 0; $j < fn_strlen($upper); $j++) {
        for ($i = 0; $i < fn_strlen($string); $i++) {
            if ($string[$i] == $lower[$j]) {
                $string[$i] = $upper[$j];
            }
        }
    }
    return $string;
}

?>