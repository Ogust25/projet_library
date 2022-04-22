<?php
include "./strlen.php";

function fn_strcmp($str1,$str2){
    $res = "";
    if ($str1 == $str2) {
        $res = 0;
    }else if ($str1 > $str2) {
        $res = 1;
    }else if ($str1 < $str2) {
        $res = -1;
    }
    return $res;
}

?>