<?php

$modelo = $_POST["modelo"];
$ano = $_POST["ano"];
$valor = $_POST["valor"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];


if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE info_carros SET modelo='$modelo', ano=$ano, valor=$valor, nome='$nome', telefone ='$telefone' WHERE id = $id";
}
else{
	
	$sql = "INSERT INTO info_carros (modelo, ano, valor, nome, telefone) VALUES ('$modelo', $ano, $valor, '$nome', '$telefone')";
}


$query = mysqli_query($conexao, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>