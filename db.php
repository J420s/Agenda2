<?php
require_once("utils.php");

define("Page_Size",5);

function number_of_pages($tableID){
    $numberOfRows = mysql_ask("SELECT COUNT(*) as total FROM ".$tableID) -> fetch_assoc()['total'];
    return round($numberOfRows / Page_Size);
}

function getPage($tableID,$columns,$page = 0, $order = 'id'){
    
    $offset = $page * Page_Size;

    $query = mysql_ask("SELECT " . columns_to_string($columns) . "
                        FROM " . $tableID . "
                        ORDER BY " . $order . "
                        LIMIT " . Page_Size . "
                        OFFSET " . $offset . " ");

    return $query;
}

function mysql_ask($query){
    
    $connection = mysqli_connect("127.0.0.1","phpmyadmin","hola01","Agenda");

    $result = $connection -> connect_error ? $connection -> connect_error : $connection -> query($query);

    $connection -> close();
    return $result;
}
