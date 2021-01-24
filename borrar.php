<?php

require_once "./lib/db.php";
require_once "./lib/utils.php";

if($deleted){
    echo "<script> alert('Cambios guardados con éxito.');      
            window.location.href='index.php';
        </script>";
}else{
    echo "<script> alert('Hemos tenido un problema. Intentelo de nuevo..');
            window.location.href='". $_SERVER['HTTP_REFERER'] ."';      
        </script>";
}


