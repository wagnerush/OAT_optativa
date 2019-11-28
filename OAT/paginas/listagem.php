<?php

if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM info_carros WHERE id = $id";
	$query = mysqli_query($conexao, $sql);
	if ($query === TRUE) {
		echo "Registro $id excluído com sucesso!";
	}
}


$sql = "SELECT * FROM info_carros";

$query = mysqli_query($conexao, $sql);


?>

<table class="table">

 <tr>
  	<th>Id</th>
    <th>Modelo</th>
    <th>Ano</th>
    <th>Valor</th>
    <th>Vendedor</th>
    <th>Telefone</th>
    <th>Editar</th>
    <th>Excluir</th>


  </tr>
<?php
while($row = mysqli_fetch_assoc($query)){
?>

	<tr>
		<td>
			<?= $row["id"] ?>
		</td>
		<td>
			<?= $row["modelo"] ?>
		</td>
		<td>
			<?= $row["ano"] ?>
		</td>
		<td>			
			<?= $row["valor"] ?>
		</td>
		<td>			
			<?= $row["nome"] ?>
		</td>

		<td>			
			<?= $row["telefone"] ?>
		</td>
		<td>
			<button id="botao1"><a 
			href="?pg=cadastro&editar=<?= $row["id"] ?>"
			>
				Editar
			</a></button>
		</td>
		<td><button id="botao2">
			<a 
			href="?pg=listagem&excluir=<?= $row["id"] ?>"
			>
				Excluir
			</a>
		</button>
		</td>
	</tr>

<?php 

}


?>

</table>