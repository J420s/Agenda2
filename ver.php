<?php require_once"./components/Form.php"?>

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
    <?php 
        $myForm = new Form($_REQUEST['id']);
        $myForm -> build_form('readonly');
    ?>
    <div class="row justify-content-center m-5">
        <div class="col-md-6 align-self-center">
          <a class="btn btn-secondary" href="index.php?page=<?=$myForm->page?>&order=<?=$myForm->order?>" role="button">Close</a>
        </div>
    </div>

  </body>
</html>
