<?php
include "count.php";

function fn_sort($array){
    for ($i=0; $i < fn_count($array); $i++) { 
        if ((gettype($array[$i]) == "integer") || ((gettype($array[$i]) == "double"))) {
            # code...
        }else {
            # code...
        }
    }
}
echo fn_sort([7,"sou",1,5,"ouga"]);

?>