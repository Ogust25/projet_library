<?php

function fn_trim($str){
    $res = "";
    for ($i=0; $i < strlen($str); $i++) {  
        if($str[$i] != " "){
            $res .= $str[$i];
        }
    }
    return $res;
}

?>