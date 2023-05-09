<?php 

include("session.php");
include("layout/topo.php");
include("database/database.php");

$id = $_GET["id"];

$sql = "SELECT *
        FROM produto
        WHERE id =".$id;

$resultado = $conn->query($sql);
$dados = $resultado->fetch_assoc();

?>

<h1>Alteração de Produto</h1>

<form method= "post" action= "salvar_alt_produto.php">
  <input type = 'hidden'
         name = 'id'
         value = "<?php echo $dados['id']?>">

  <div class="form-group">

    <label>Nome do Produto</label>
    <input type="text" 
           name= "nome" 
           class="form-control" 
           placeholder="Calça Jeans"
           value = "<?php echo $dados['nome']?>">
  </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" 
           name= "preco" 
           class="form-control" 
           placeholder="50.89"
           value = "<?php echo $dados['preco']?>">
  </div>

  <div class="form-group">
    <label>Quantidade</label>
    <input type="text" 
           name= "quantidade" 
           class="form-control" 
           placeholder="10"
           value = "<?php echo $dados['quantidade']?>">
  </div>

  <div class="form-group">
    <label>Peso em Kg</label>
    <input type="text" 
           name= "peso" 
           class="form-control" 
           placeholder="0.8"
           value = "<?php echo $dados['peso']?>">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php

  include("layout/baixo.php");

?>