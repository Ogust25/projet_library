<?php
include "./strlen.php";

function fn_str_replace($search,$replace,$subject){
    $res = "";
    for ($i=0; $i < strlen($subject); $i++) { 
        if ($subject[$i] == $search) {
            $res .= $replace;
        }else {
            $res .= $subject[$i];
        }
    }
    return $res;
}

?>