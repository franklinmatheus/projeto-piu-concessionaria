<!DOCTYPE html>
<html lang="pt">
  <head>
    <?php
      include('php/bd.php');
      session_start();
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      $mensagem = 0;

      $select = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
      $sql_select = mysqli_query($conexao, $select);
      $login = mysqli_fetch_array($sql_select);
      $numero = mysqli_num_rows($sql_select);
    ?>
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
    <script type="text/javascript">
    function loginsuccessfully(){
      setTimeout("window.location='privado/index.php'",500);
    }
    function loginfailed(){
      setTimeout("window.location='index.php?mensagem=1'",500);
      alert("Nome ou senha inválidos");
    }
    </script>
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Hi-car</h3>
            </div>
          </div>
          <div class="inner cover">
            <?php
              if($numero > 0){
                $_SESSION['login'] = $login['login'];
                $_SESSION['senha'] = $login['senha'];
                echo "<script>loginsuccessfully()</script>";
                $mensagem = 1;
              } else {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                echo "<script>loginfailed()</script>";
              }
            ?>
            <img src="images/load.gif" width="80px">  
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
