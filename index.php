<?php
  session_start();
  if(isset($_SESSION['login'])){
    $_SESSION['login'] = false;
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="docs/favicon.ico">
    <title>Hi-car</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="dist/css/cover.css" rel="stylesheet">
    <link href="dist/css/sign.css" rel="stylesheet">
    <script src="docs/assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Hi-car</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Login</a></li>
                  <li><a href="cadastro.php">Cadastre-se</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            <form class="form-signin" action="validar.php" method="POST">
              <h2 class="form-signin-heading">Faça seu login</h2>
               <?php
                if(isset($_GET['mensagem'])){
                  if($_GET['mensagem'] == 0){
                    echo "<div class='alert alert-danger' role='alert'><b>Ops!</b> Dados inválidos.</div>";
                  }
                }
              ?>
              <label for="inputEmail" class="sr-only">Login</label>
              <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" name="senha" class="form-control" placeholder="Senha" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>Todos os direitos reservados.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
