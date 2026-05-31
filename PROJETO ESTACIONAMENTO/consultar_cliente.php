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
    unset($_SESSION['clientes'][$id]);
    header('Location: clientes.php');
    exit();
  }
?>

<h1>Consultar Cliente</h1>
<p><strong>ID:</strong> <?= $cliente['id'] ?></p>
<p><strong>Nome:</strong> <?= $cliente['nome'] ?></p>
<p><strong>Telefone:</strong> <?= $cliente['telefone'] ?></p>
<p><strong>CPF:</strong> <?= $cliente['cpf'] ?></p>

<form method="post">
  <button type="submit" class="btn btn-danger">Excluir</button>
  <a href="clientes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
