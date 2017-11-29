<?php
	$servidor='localhost';
	$usuario='root';
	$senha='';
	$bancodedados='projeto';
	$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
	if (mysqli_connect_errno()) {
	  die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
	  exit();
	}
?>
