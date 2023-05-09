<?php 

include("session.php");
include("layout/topo.php");

?>

<h1>Cadastrar Cliente</h1>

<form method= "post" action= "salvar_cliente.php">
  <div class="form-group">
    <label>Nome do Cliente</label>
    <input type="text" name= "nome" class="form-control" placeholder="Jose">
  </div>

  <div class="form-group">
    <label>Data de Nascimento(AAAA-MM-DD)</label>
    <input type="text" name= "data_nascimento" class="form-control" placeholder="2023-04-13">
  </div>

  <div class="form-group">
    <label>Cidade Natal(Codigo)</label>
    <input type="text" name= "cidade_nasc" class="form-control" placeholder="1">
  </div>

  <div class="form-group">
    <label>Cliente Ativo(0-Inativo, 1-Ativo)</label>
    <input type="text" name= "ativo" class="form-control" placeholder="0">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php

  include("layout/baixo.php");

?>