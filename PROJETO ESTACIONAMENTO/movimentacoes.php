<?php require_once('cabecalho.php'); ?>

<h2>Entradas e Saídas</h2>
<a href="nova_movimentacao.php" class="btn btn-success mb-3">Registrar Entrada</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Cliente</th>
      <th>Veículo</th>
      <th>Vaga</th>
      <th>Entrada</th>
      <th>Saída</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($_SESSION['movimentacoes'] as $mov){ ?>
      <tr>
        <td><?= $mov['id'] ?></td>
        <td><?= nomeCliente($mov['cliente_id']) ?></td>
        <td><?= placaVeiculo($mov['veiculo_id']) ?></td>
        <td><?= numeroVaga($mov['vaga_id']) ?></td>
        <td><?= $mov['data_entrada'] ?> <?= $mov['hora_entrada'] ?></td>
        <td><?= $mov['data_saida'] == '' ? '-' : $mov['data_saida'] . ' ' . $mov['hora_saida'] ?></td>
        <td><?= $mov['status'] ?></td>
        <td class="d-flex gap-2">
          <?php if($mov['status'] == 'Aberta'){ ?>
            <a href="finalizar_movimentacao.php?id=<?= $mov['id'] ?>" class="btn btn-sm btn-warning">Registrar Saída</a>
          <?php } ?>
          <a href="consultar_movimentacao.php?id=<?= $mov['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once('rodape.php'); ?>
