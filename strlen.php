<?php

function fn_strlen($s){
    $count = 0;
    while($s[$count] != null){
        $count++;
    }
    return $count;
}

?>