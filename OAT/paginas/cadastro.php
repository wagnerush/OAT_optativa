<?php

$actionEditar = "";
$id = NULL;
$modelo = NULL;
$ano = NULL;
$valor = NULL;
$nome = NULL;
$telefone = NULL;



if (isset($_GET["editar"])) {
  $id = $_GET["editar"];
  $sql = "SELECT * FROM info_carros WHERE id = $id";
  $query = mysqli_query($conexao, $sql);
  if($row = mysqli_fetch_assoc($query)){
    $modelo = $row["modelo"];
    $ano = $row["ano"];
    $valor = $row["valor"];
    $nome = $row["nome"];
    $telefone = $row["telefone"];
  
  }
  else{
    echo "Falha ao carregar registro!";
  }
  $actionEditar = "&editar=$id";
}

?>

<div class="titulo">
 <h3> Formulário</h3>

</div>



<div>

<form action="?pg=processar_cadastro<?= $actionEditar ?>" method="POST">


      <label>Marca/Modelo:</label> <input type="text" name="modelo" placeholder="Ex: Fiat Palio" value="<?= $modelo ?>">
       <br><br>

      <label>Ano Modelo:</label> <input type="text" name="ano" placeholder="Ex: 2008" value="<?= $ano ?>">
       <br><br>

      <label>Valor de Venda:</label> <input type="text" name="valor" placeholder="Valor" value="<?= $valor ?>">
       <br><br>

      <label>Vendedor:</label> <input type="text" name="nome" placeholder="Nome vendedor" value="<?= $nome ?>">
       <br><br>

      <label>Telefone:</label> <input type="text" name="telefone" placeholder="Telefone" value="<?= $telefone ?>">
       <br><br>
       
       
        <button type="submit">Enviar</button> 
</form> 


</div>