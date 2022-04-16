<?php

function fn_count($array){
    $count = 0;
    while ($array[$count] != null) {
        $count++;
    }
    return $count;
}

?>