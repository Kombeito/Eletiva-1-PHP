<?php
  require_once('cabecalho.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = proximoId($_SESSION['clientes']);
    $_SESSION['clientes'][$id] = [
      'id' => $id,
      'nome' => $_POST['nome'],
      'telefone' => $_POST['telefone'],
      'cpf' => $_POST['cpf']
    ];
    header('Location: clientes.php');
    exit();
  }
?>

<h1>Novo Cliente</h1>
<form method="post">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" id="nome" name="nome" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" id="telefone" name="telefone" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" id="cpf" name="cpf" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="clientes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
