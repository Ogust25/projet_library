<?php

function fn_strlen($string){
    $i = 0;
    while(isset($string[$i]) != null){
        $i++;
    }
    return $i;
}

?>