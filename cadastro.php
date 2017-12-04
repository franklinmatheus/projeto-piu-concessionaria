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
                  <li><a href="index.php">Login</a></li>
                  <li class="active"><a href="cadastro.php">Cadastre-se</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            <form class="form-signup" action="php/cadastro.php" method="POST">
              <h2 class="form-signup-heading">Informe seus dados</h2>
              <?php
                if(isset($_GET['mensagem'])){
                  if($_GET['mensagem'] == 1){
                    echo "<div class='alert alert-danger' role='alert'><b>Ops!</b> Este login já está em uso.</div>";
                  } else {
                    if($_GET['mensagem'] == 2){
                      echo "<div class='alert alert-danger' role='alert'><b>Ops!</b> As senhas não conferem.</div>";
                    } else {
                      if($_GET['mensagem'] == 3){
                        echo "<div class='alert alert-danger' role='alert'><b>Ops!</b> Este login já está em uso e as senhas não conferem.</div>";
                      } else {
                        if($_GET['mensagem'] == 4){
                          echo "<div class='alert alert-success' role='alert'><b>Sucesso!</b> Cadastro realizado. <a href='index.php' class='alert-link'>Clique aqui para fazer o login.</a></div>";
                        }
                      }
                    }
                  }
                }
              ?>
              <label for="inputNome" class="sr-only">Login</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus>
              <label for="inputLogin" class="sr-only">Login</label>
              <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" name="senha" class="form-control" placeholder="Senha" required>
              <label for="inputConfirmPassword" class="sr-only">Confirme sua senha</label>
              <input type="password" name="c_senha" class="form-control" placeholder="Confirme sua senha" required>

              <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
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
