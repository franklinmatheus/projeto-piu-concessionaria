<?php

include ('bd.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$c_senha = $_POST['c_senha'];
$mensagem = 0;

$select = ("SELECT * FROM usuario");
$sql_login = mysqli_query($conexao, $select);
//$login_bd = mysqli_fetch_array($login);
while ($login_db = mysqli_fetch_array($sql_login)) {
  if($login_db['login'] == $login){
  	$mensagem = $mensagem+1;
  }
}
if($senha != $c_senha){
	$mensagem = $mensagem+2;
}
if($mensagem == 0){
	$insert = ("INSERT INTO usuario(nome, login, senha) VALUES ('$nome', '$login', '$senha')");
	$sql_insert = mysqli_query($conexao, $insert);
	$mensagem = 4;
}
header("location: ../cadastro.php?mensagem=$mensagem")
?>