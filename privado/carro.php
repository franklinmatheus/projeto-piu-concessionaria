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
              <div class="panel">
                <div class="panel-heading">
                  <span class="label label-success pull-right">Fora de serviço</span>                        
                  <h3 class="panel-title"><strong><?=$car['modelo']?></strong></h3>
                </div>
                <hr>
                <div class="panel-body">
                  <p>
                    <strong>Ano </strong><span class="pull-right"><?=$car['ano']?></span>
                  </p>
                  <p>
                    <strong>Marca </strong><span class="pull-right"><?=$car['marca']?></span>
                  </p>
                  <p>
                    <strong>KM </strong><span class="pull-right"><?=$car['km']?></span>
                  </p>
                  <p>
                    <strong>Cor </strong><span class="pull-right"><?=$car['cor']?></span>
                  </p>
              </div>
            </div>
            <div class="col-md-12" align="center">
              <p><a href="historico_veiculo.php?id=<?=$car['id']?>"><button type="button" class="btn btn-primary">Histórico do veículo</button></a></p>
              <p><a href=""><button type="button" class="btn btn-primary disabled">Serviços ativos</button></a></p>
              <p><a href="agendar.php?id=<?=$car['id']?>"><button type="button" class="btn btn-success">Agendar revisão</button></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('../dist/js/scripts.php') ?>
  </body>
</html>
