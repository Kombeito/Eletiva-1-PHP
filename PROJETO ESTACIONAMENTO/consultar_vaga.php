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
    unset($_SESSION['vagas'][$id]);
    header('Location: vagas.php');
    exit();
  }
?>

<h1>Consultar Vaga</h1>
<p><strong>ID:</strong> <?= $vaga['id'] ?></p>
<p><strong>Número:</strong> <?= $vaga['numero'] ?></p>
<p><strong>Setor:</strong> <?= $vaga['setor'] ?></p>
<p><strong>Status:</strong> <?= $vaga['status'] ?></p>

<form method="post">
  <button type="submit" class="btn btn-danger">Excluir</button>
  <a href="vagas.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
