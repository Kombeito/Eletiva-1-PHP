<?php
  require_once('cabecalho.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = proximoId($_SESSION['movimentacoes']);
    $vaga_id = $_POST['vaga_id'];

    $_SESSION['movimentacoes'][$id] = [
      'id' => $id,
      'cliente_id' => $_POST['cliente_id'],
      'veiculo_id' => $_POST['veiculo_id'],
      'vaga_id' => $vaga_id,
      'data_entrada' => $_POST['data_entrada'],
      'hora_entrada' => $_POST['hora_entrada'],
      'data_saida' => '',
      'hora_saida' => '',
      'status' => 'Aberta'
    ];

    $_SESSION['vagas'][$vaga_id]['status'] = 'Ocupada';
    header('Location: movimentacoes.php');
    exit();
  }
?>

<h1>Registrar Entrada</h1>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Cliente</label>
    <select name="cliente_id" class="form-select" required>
      <?php foreach($_SESSION['clientes'] as $cliente){ ?>
        <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Veículo</label>
    <select name="veiculo_id" class="form-select" required>
      <?php foreach($_SESSION['veiculos'] as $veiculo){ ?>
        <option value="<?= $veiculo['id'] ?>"><?= $veiculo['placa'] ?> - <?= $veiculo['modelo'] ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Vaga</label>
    <select name="vaga_id" class="form-select" required>
      <?php foreach($_SESSION['vagas'] as $vaga){ ?>
        <?php if($vaga['status'] == 'Livre'){ ?>
          <option value="<?= $vaga['id'] ?>"><?= $vaga['numero'] ?> - <?= $vaga['setor'] ?></option>
        <?php } ?>
      <?php } ?>
    </select>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label class="form-label">Data de entrada</label>
      <input type="date" name="data_entrada" class="form-control" value="<?= date('Y-m-d') ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label class="form-label">Hora de entrada</label>
      <input type="time" name="hora_entrada" class="form-control" value="<?= date('H:i') ?>" required>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="movimentacoes.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>
