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
                <div class="alert alert-success" role="alert">
                    <strong>Você não possui nenhuma notificação!</strong>
                </div>
                <hr>
                <h3><strong>Histórico</strong></h3>
                <div class="panel">
                    <div class="panel-heading">
                        <span class="label label-warning pull-right">28, nov. 2017</span>                        
                        <h3 class="panel-title"><strong>Carro adicionado</strong></h3>
                    </div>
                    <div class="panel-body">
                        Seu Renegade foi adicionado ao seu perfil!
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('../dist/js/scripts.php') ?>
  </body>
</html>
