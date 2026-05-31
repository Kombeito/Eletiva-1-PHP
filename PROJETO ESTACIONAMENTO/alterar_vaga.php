<?php
  require_once('cabecalho.php');
  $id = $_GET['id'];
  $vaga = localizar($_SESSION['vagas'], $id);

  if($vaga == null){
    echo "<div class='alert alert-danger'>Vaga não encontrada!</div>";
    require_once('rodape.php');
    exit();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['vagas'][$id]['numero'] = $_POST['numero'];
    $_SESSION['vagas'][$id]['setor'] = $_POST['setor'];
    $_SESSION['vagas'][$id]['status'] = $_POST['status'];
    header('Location: vagas.php');
    exit();
  }
?>

<h1>Alterar Vaga</h1>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Número da vaga</label>
    <input type="text" name="numero" class="form-control" value="<?= $vaga['numero'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Setor</label>
    <input type="text" name="setor" class="form-control" value="<?= $vaga['setor'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
      <option value="Livre" <?= $vaga['status'] == 'Livre' ? 'selected' : '' ?>>Livre</option>
      <option value="Ocupada" <?= $vaga['status'] == 'Ocupada' ? 'selected' : '' ?>>Ocupada</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="vagas.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
