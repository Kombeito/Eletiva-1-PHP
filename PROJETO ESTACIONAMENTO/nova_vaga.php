<?php
  require_once('cabecalho.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = proximoId($_SESSION['vagas']);
    $_SESSION['vagas'][$id] = [
      'id' => $id,
      'numero' => $_POST['numero'],
      'setor' => $_POST['setor'],
      'status' => $_POST['status']
    ];
    header('Location: vagas.php');
    exit();
  }
?>

<h1>Nova Vaga</h1>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Número da vaga</label>
    <input type="text" name="numero" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Setor</label>
    <input type="text" name="setor" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
      <option value="Livre">Livre</option>
      <option value="Ocupada">Ocupada</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="vagas.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
