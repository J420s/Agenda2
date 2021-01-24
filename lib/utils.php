<?php

//Busca elemento en un array y si está lo devuelve, si no, devuelve null.
function findValue($value,$list){
    return $list[$value] ? $list[$value] : null;
}

function columns_to_string($arr){
    $result = "";
    foreach($arr as $value){
        $result .= $value . ",";
    }
    return substr($result, 0, -1);
}

function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}