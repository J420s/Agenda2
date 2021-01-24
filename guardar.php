<?php

require_once "./lib/db.php";

if($_REQUEST['id'] !== ""){
    $success = updateRow($_REQUEST['id'],array(
        'nom'       =>  $_REQUEST['nom'],
        'cognoms'   =>  $_REQUEST['cognoms'],
        'direccio'  =>  $_REQUEST['direccio'],
        'localitat' =>  $_REQUEST['localitat'],
        'provincia' =>  $_REQUEST['provincia'],
        'cp'        =>  $_REQUEST['cp'],
        'telefon1'  =>  $_REQUEST['telefon1'],
        'telefon2'  =>  $_REQUEST['fax'],
        'mail'      =>  $_REQUEST['mail']));
}else{
    $success = addRow(array(
        'id'        =>  getFreeID(),
        'nom'       =>  $_REQUEST['nom'],
        'cognoms'   =>  $_REQUEST['cognoms'],
        'direccio'  =>  $_REQUEST['direccio'],
        'localitat' =>  $_REQUEST['localitat'],
        'provincia' =>  $_REQUEST['provincia'],
        'cp'        =>  $_REQUEST['cp'],
        'telefon1'  =>  $_REQUEST['telefon1'],
        'telefon2'  =>  $_REQUEST['fax'],
        'mail'      =>  $_REQUEST['mail']));
}


if($success){
    echo "<script> alert('Cambios guardados con éxito.');      
            window.location.href='index.php';
        </script>";
}else{
    echo "<script> alert('Hemos tenido un problema. Intentelo de nuevo..');
            window.location.href='". $_SERVER['HTTP_REFERER'] ."';      
        </script>";
}


