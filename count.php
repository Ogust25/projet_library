<?php

function fn_count($array){
    $count = 0;
    while (isset($array[$count]) != null) {
        $count++;
    }
    return $count;
}

?>