<?php 

	#Conexao com o banco de dados

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "carro";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	 
 ?>