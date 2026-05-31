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
    if($mov['status'] == 'Aberta'){
      $_SESSION['vagas'][$mov['vaga_id']]['status'] = 'Livre';
    }
    unset($_SESSION['movimentacoes'][$id]);
    header('Location: movimentacoes.php');
    exit();
  }
?>

<h1>Consultar Movimentos</h1>
<p><strong>ID:</strong> <?= $mov['id'] ?></p>
<p><strong>Cliente:</strong> <?= nomeCliente($mov['cliente_id']) ?></p>
<p><strong>Veículo:</strong> <?= placaVeiculo($mov['veiculo_id']) ?></p>
<p><strong>Vaga:</strong> <?= numeroVaga($mov['vaga_id']) ?></p>
<p><strong>Entrada:</strong> <?= $mov['data_entrada'] ?> <?= $mov['hora_entrada'] ?></p>
<p><strong>Saída:</strong> <?= $mov['data_saida'] == '' ? '-' : $mov['data_saida'] . ' ' . $mov['hora_saida'] ?></p>
<p><strong>Status:</strong> <?= $mov['status'] ?></p>

<form method="post">
  <button type="submit" class="btn btn-danger">Excluir</button>
  <a href="movimentacoes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
