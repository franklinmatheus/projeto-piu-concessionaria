<!DOCTYPE html>
<?php include ('session.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Área do usuário</title>
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
              <?php 
                $select_carros = "SELECT * FROM carro WHERE id_dono='".$user['id']."'";
                $sql_select_carros = mysqli_query($conexao, $select_carros);

                while ($carro = mysqli_fetch_array($sql_select_carros)) {
                  ?>
                    <div class="car">
                      <p><strong><a href="carro/carro.php?id=<?=$carro['id']?>"><?=$carro['modelo']?></a></strong></p>
                      <?=$carro['marca']?>
                    </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('../dist/js/scripts.php') ?>
  </body>
</html>
