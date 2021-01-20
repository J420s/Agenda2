<?php include_once "Table.php"?>
<?php include_once "Navigator.php"?>
<?php include_once "db.php"?>

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

    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="height:50px"></div>
      <div class="row justify-content-center">
          <div class="col-md-6">
              <?php
                $contactes = new Table('contactes',array('id','nom','cognoms'));
                echo $contactes->build_table();
                
                $nav = new Navigator('contactes');
                echo $nav->build_nav();
              ?>
          </div>
      </div>
    </div>
  </body>
</html>
