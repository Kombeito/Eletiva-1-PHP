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
    $_SESSION['veiculos'][$id]['placa'] = strtoupper($_POST['placa']);
    $_SESSION['veiculos'][$id]['modelo'] = $_POST['modelo'];
    $_SESSION['veiculos'][$id]['cor'] = $_POST['cor'];
    header('Location: veiculos.php');
    exit();
  }
?>

<h1>Alterar Veículo</h1>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Placa</label>
    <input type="text" name="placa" class="form-control" value="<?= $veiculo['placa'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Modelo</label>
    <input type="text" name="modelo" class="form-control" value="<?= $veiculo['modelo'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Cor</label>
    <input type="text" name="cor" class="form-control" value="<?= $veiculo['cor'] ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="veiculos.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
