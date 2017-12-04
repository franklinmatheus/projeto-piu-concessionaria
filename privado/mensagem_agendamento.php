<!DOCTYPE html>
<?php 
    include ('session.php'); 
    $id_car = $_GET['id'];
    
    $select = "SELECT * FROM carro WHERE id='$id_car'";
    $sql_select = mysqli_query($conexao, $select);
    $car = mysqli_fetch_array($sql_select);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Carro</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../dist/css/user.css" rel="stylesheet">
    <script src="../docs/assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <?php include ('navbar.php') ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10 col-xs-12 main">
          <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <strong>Revisão agendada! <a href="index.php">Clique aqui </a></strong> para voltar ao inicio!
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('../dist/js/scripts.php') ?>
  </body>
</html>
