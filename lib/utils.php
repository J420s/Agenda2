<?php
function columns_to_string($arr){
    $result = "";
    foreach($arr as $value){
        $result .= $value . ",";
    }
    return substr($result, 0, -1);
}