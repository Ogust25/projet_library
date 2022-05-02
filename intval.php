<?php
include "./count.php";
include "./strlen.php";

function fn_intval($var){
    $int = "/^[0-9\s]*$/";
    $virgule = "/^[\-]{0,1}[0-9]+[\.][0-9]+|[\-]{0,1}[0-9]+$/";
    if (preg_match($int,$var)) {
        return $var;
    }else if (preg_match($virgule,$var)) {
        $res = "";
        for ($i=0; $i <= fn_strlen($var); $i++) { 
            if ($var[$i] == ".") {
                break;
            }else{
                $res .= $var[$i];
            }
        }
        return $res;
    }else{
        return fn_count($var);
    }
}
echo fn_intval("55.58");

?>