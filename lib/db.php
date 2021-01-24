<?php


define("Page_Size",5);

function mysql_ask($query){
    
    $connection = mysqli_connect("127.0.0.1","phpmyadmin","hola01","Agenda");

    $result = $connection -> connect_error ? $connection -> connect_error : $connection -> query($query);

    $connection -> close();
    return $result;
}

function addRow($fields){
    $query = "INSERT INTO contactes ";
    $columns = "(";
    $values = "VALUES (";
    foreach ($fields as $key => $val) {
        if($val) {
            $columns .= $key . ",";
            $values .= "'".$val."',";
        }
    }
    $columns = substr($columns, 0, -1) . ")";
    $values = substr($values, 0, -1) . ")";
    return mysql_ask($query . $columns . $values);
}



function updateRow($id,$fields){
    $query = "UPDATE contactes SET ";
    foreach ($fields as $key => $value) {
        if($value) $query .= $key ."='$value',";
    }
    $query = substr($query, 0, -1);
    $query .= "WHERE id=".$id;
    return mysql_ask($query);
}

function deleteRow($id){
    return mysql_ask("DELETE FROM contactes WHERE id=".$id);
}

function getRow($id){
    return mysql_ask("SELECT * FROM contactes WHERE id = '$id' ") -> fetch_assoc();
}

function getPage($tableID,$page = 0, $order = 'id'){
    
    $offset = $page * Page_Size;

    return mysql_ask("SELECT id,nom,cognoms
                        FROM " . $tableID . "
                        ORDER BY " . $order . "
                        LIMIT " . Page_Size . "
                        OFFSET " . $offset . " ");
}

function number_of_pages($tableID){
    $numberOfRows = mysql_ask("SELECT COUNT(*) as total FROM ".$tableID) -> fetch_assoc()['total'];
    return ceil($numberOfRows / Page_Size);
}

//Busca el siguiente ID sin usar
function getFreeID(){
    $maxID = mysql_ask("SELECT MAX(id) FROM contactes") -> fetch_assoc()['MAX(id)'];
    return intval($maxID) + 1;
}

