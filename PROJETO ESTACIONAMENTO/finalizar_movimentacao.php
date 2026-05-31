<?php
  require_once('cabecalho.php');
  $id = $_GET['id'];
  $mov = localizar($_SESSION['movimentacoes'], $id);

  if($mov == null){
    echo "<div class='alert alert-danger'>Registro não encontrado!</div>";
    require_once('rodape.php');
    exit();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['movimentacoes'][$id]['data_saida'] = $_POST['data_saida'];
    $_SESSION['movimentacoes'][$id]['hora_saida'] = $_POST['hora_saida'];
    $_SESSION['movimentacoes'][$id]['status'] = 'Finalizada';

    $vaga_id = $_SESSION['movimentacoes'][$id]['vaga_id'];
    $_SESSION['vagas'][$vaga_id]['status'] = 'Livre';

    header('Location: movimentacoes.php');
    exit();
  }
?>

<h1>Registrar Saída</h1>
<p><strong>Cliente:</strong> <?= nomeCliente($mov['cliente_id']) ?></p>
<p><strong>Veículo:</strong> <?= placaVeiculo($mov['veiculo_id']) ?></p>
<p><strong>Vaga:</strong> <?= numeroVaga($mov['vaga_id']) ?></p>
<p><strong>Entrada:</strong> <?= $mov['data_entrada'] ?> <?= $mov['hora_entrada'] ?></p>

<form method="post">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label class="form-label">Data de saída</label>
      <input type="date" name="data_saida" class="form-control" value="<?= date('Y-m-d') ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label class="form-label">Hora de saída</label>
      <input type="time" name="hora_saida" class="form-control" value="<?= date('H:i') ?>" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Finalizar</button>
  <a href="movimentacoes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
