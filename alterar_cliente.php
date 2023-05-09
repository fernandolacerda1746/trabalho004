<?php

  include("session.php");
  include("layout/topo.php");

  $id = $_GET["id"];

  $sql = "SELECT *
          FROM cliente
          WHERE id =".$id;


  include("database/database.php");

  $resultado = $conn->query($sql);
  $dados = $resultado->fetch_assoc();

?>

<h1>Alteração de Cliente</h1>

<form method= "post" action= "salvar_alt_cliente.php">
  <input type = 'hidden'
         name = 'id'
         value = "<?php echo $dados['id']?>">

  <div class="form-group">

    <label>Nome do Cliente</label>
    <input type="text" 
           name= "nome" 
           class="form-control" 
           placeholder="Joao"
           value = "<?php echo $dados['nome']?>">
  </div>

  <div class="form-group">
    <label>Data de Nascimento(AAAA-MM-DD)</label>
    <input type="text" 
           name= "data_nascimento" 
           class="form-control" 
           placeholder="2023-04-13"
           value = "<?php echo $dados['data_nascimento']?>">
  </div>

  <div class="form-group">
    <label>Cidade Natal(Codigo)</label>
    <input type="text" 
           name= "cidade_nasc" 
           class="form-control" 
           placeholder="10"
           value = "<?php echo $dados['cidade_nasc']?>">
  </div>

  <div class="form-group">
    <label>Ativo(0-Inativo, 1-Ativo)</label>
    <input type="text" 
           name= "ativo" 
           class="form-control" 
           placeholder="0.8"
           value = "<?php echo $dados['ativo']?>">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php

  include("layout/baixo.php");

?>