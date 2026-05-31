<?php
  require_once('cabecalho.php');
  $id = $_GET['id'];
  $cliente = localizar($_SESSION['clientes'], $id);

  if($cliente == null){
    echo "<div class='alert alert-danger'>Cliente não encontrado!</div>";
    require_once('rodape.php');
    exit();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['clientes'][$id]['nome'] = $_POST['nome'];
    $_SESSION['clientes'][$id]['telefone'] = $_POST['telefone'];
    $_SESSION['clientes'][$id]['cpf'] = $_POST['cpf'];
    header('Location: clientes.php');
    exit();
  }
?>

<h1>Alterar Cliente</h1>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="<?= $cliente['nome'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control" value="<?= $cliente['telefone'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control" value="<?= $cliente['cpf'] ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="clientes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
