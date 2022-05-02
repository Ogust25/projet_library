<?php
include './is_number.php';

function fn_is_array($elem){
    if(isset($elem[0]) && $elem[0]){
        if(fn_is_number($elem[0]) && !isset($elem[0][0])){
            return 1;
        }
        if($elem[0][0] != $elem[0]){
           return 1; 
        }
    }         
}