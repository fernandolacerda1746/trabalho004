<?php

    include("layout/topo.php");
?>

<h1>Login</h1>

<form method= "post" action= "validar_login.php">
  <div class="form-group">
    <label>Usuário</label>
    <input type="text" name= "usuario" class="form-control" placeholder="Insira seu usuário" required>
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" name= "senha" class="form-control" placeholder="Insira sua senha" required>
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<a href = 'novo_usuario.php'>Cadastrar Novo Usuário</a>

<?php

    include("layout/baixo.php");

?>