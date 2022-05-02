<?php

function fn_is_number($elem){
    if($elem === true || isset($elem[0])){
        return false;
    }
    if($elem && ($elem/$elem == 1) && !isset($elem[0])){
        return 1;
    }
}