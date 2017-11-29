<?php
  include("../php/bd.php");
  session_start();

  if ((!isset($_SESSION['login']) ==  true ) AND (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location: index.php");
  }
  $logado = $_SESSION['login'];

  $select = "SELECT * FROM  usuario WHERE login='$logado'";
  $sql_select = mysqli_query($conexao, $select);
  $user = mysqli_fetch_array($sql_select);
  $id = $user['id'];
?>