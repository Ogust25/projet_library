<?php

function fn_empty($var){
    if ($var == null){
        return true;
    }else if ($var == 0) {
        return true;
    }else{
        return false;
    }
}

?>