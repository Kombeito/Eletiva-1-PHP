<?php
  require_once('cabecalho.php');
  $id = $_GET['id'];
  $veiculo = localizar($_SESSION['veiculos'], $id);

  if($veiculo == null){
    echo "<div class='alert alert-danger'>Veículo não encontrado!</div>";
    require_once('rodape.php');
    exit();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    unset($_SESSION['veiculos'][$id]);
    header('Location: veiculos.php');
    exit();
  }
?>

<h1>Consultar Veículos</h1>
<p><strong>ID:</strong> <?= $veiculo['id'] ?></p>
<p><strong>Placa:</strong> <?= $veiculo['placa'] ?></p>
<p><strong>Modelo:</strong> <?= $veiculo['modelo'] ?></p>
<p><strong>Cor:</strong> <?= $veiculo['cor'] ?></p>

<form method="post">
  <button type="submit" class="btn btn-danger">Excluir</button>
  <a href="veiculos.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
