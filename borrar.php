<?php

require_once "./lib/db.php";

if(isset($_REQUEST['confirm'])) {
    $deleted = deleteRow($_REQUEST['id']);

    if($deleted){
        echo "<script> alert('Cambios guardados con éxito.');      
                window.location.href='index.php';
            </script>";
    }else{
        echo "<script> alert('Hemos tenido un problema. Intentelo de nuevo..');
                window.location.href='". $_SERVER['HTTP_REFERER'] ."';      
            </script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
   
    <div class="row" style="height:50px"></div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark color-white">
                <div class="card-body">
                    <h4 class="card-title">Borrar registro con id: <?=$_REQUEST['id']?></h4>
                    <p class="card-text">Esta seguro? Esta acción es irreversible.</p>
                    <div class="row">
                        <div class="col-md-2">
                        <a class="btn btn-secondary" href="index.php?page=<?=$_REQUEST['page']?>&order=<?=$_REQUEST['order']?>">Volver</a>
                        </div>
                        <div class="col-md-2 offset-8 pl-3">
                            <a class="btn btn-danger" href="borrar.php?confirm=true&id=<?=$_REQUEST['id']?>">Borrar</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center m-5">
        <div class="col-md-6 align-self-center">
          
        </div>
    </div>

  </body>
</html>
