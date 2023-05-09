<?php

include("layout/topo.php");

?>

<h1>Cadastrar Usuário</h1>

<form method= "post" action= "salvar_usuario.php">
  <div class="form-group">
    <label>Nome do Cliente</label>
    <input type="text" name= "nome" class="form-control" placeholder="Jose">
  </div>

  <div class="form-group">
    <label>Usuário</label>
    <input type="text" name= "usuario" class="form-control" placeholder="jose01">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name= "email" class="form-control" placeholder="jose@email.com">
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" name= "senha" class="form-control" placeholder="******">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php

  include("layout/baixo.php");

?>