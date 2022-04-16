<?php

function fn_strlen($string){
    $count = 0;
    while($string[$count] != null){
        $count++;
    }
    return $count;
}

?>