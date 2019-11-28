
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Incluindo o arquivo de conexao com o banco de dados
require_once("conexao/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Optativa</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/stylegrid.css" media="screen and (max-width:1200px)">
	<link rel="stylesheet" type="text/css" href="css/style-grid-1024.css" media="screen and (max-width:1024px)">
	<link rel="stylesheet" type="text/css" href="css/style-grid-600.css" media="screen and (max-width:600px)">
	<link rel="stylesheet" type="text/css" href="css/style-grid-320.css" media="screen and (max-width:500px)">

	
</head>
<body>

<div id="container">

	<div class="header">

	</div>

	<div class="menu">
		<ul>

			<li><a href="?pg=inicio">Inicio</a></li>
			<li><a href="?pg=cadastro">Cadastro</a></li>
			<li><a href="?pg=listagem">Listagem</a></li>
			<li><a href="?pg=sobre">Sobre</a></li>
			


		</ul>
	</div>

	<div class="main">
	
		
		<?php

				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				

				include("paginas/".$pagina.".php");

		?>
			
		

	</div>

	<div class="rodape" >
		
		<h4>Copyright by Volkswagner. All rights reserved.</h4>


	</div>


</div>

</body>
</html>