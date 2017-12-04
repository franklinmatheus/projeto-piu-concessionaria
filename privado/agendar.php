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
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/calendario.js"></script>
    <link type="text/css" rel="Stylesheet" href="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/themes/redmond/jquery-ui.css" />
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
                    <h3 class="panel-   title"><strong><?=$car['modelo']?></strong></h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <span><strong>Selecione a concessionária</strong></span>
                        <select name="" id="" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <span><strong>Selecione a data</strong></span>
                        <input type="text" style="width: 100%;" placeholder="DD/MM/YYYY" />
                    </div>
                    <div class="form-group">
                        <span><strong>Selecione a horário</strong></span>
                        <input type="text" style="width: 100%;" placeholder="HH:MM" />
                    </div>
                    <p align="center"><a href="mensagem_agendamento.php?id=<?=$car['id']?>"><button type="button" class="btn btn-success">Agendar revisão</button></a></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('../dist/js/scripts.php') ?>
  </body>
</html>
