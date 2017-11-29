<?php
  include("../php/bd.php");
	
  $modelo = "Renegade";
  $marca = "Jeep";
  $ano = 2016;
  $km = 20000;
  $cor = "Branco";
  $id_user = $_GET['id'];

  $insert = ("INSERT INTO carro(modelo, marca, ano, km, cor, id_dono) VALUES ('$modelo', '$marca', '$ano', '$km', '$cor', '$id_user')");
  $sql_insert = mysqli_query($conexao, $insert);
  
  header("location: ../index.php");
?>
