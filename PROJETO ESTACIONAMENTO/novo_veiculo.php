<?php
  require_once('cabecalho.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = proximoId($_SESSION['veiculos']);
    $_SESSION['veiculos'][$id] = [
      'id' => $id,
      'placa' => strtoupper($_POST['placa']),
      'modelo' => $_POST['modelo'],
      'cor' => $_POST['cor']
    ];
    header('Location: veiculos.php');
    exit();
  }
?>

<h1>Novo Veículo</h1>
<form method="post">
  <div class="mb-3">
    <label for="placa" class="form-label">Placa</label>
    <input type="text" id="placa" name="placa" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" id="modelo" name="modelo" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="cor" class="form-label">Cor</label>
    <input type="text" id="cor" name="cor" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="veiculos.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
