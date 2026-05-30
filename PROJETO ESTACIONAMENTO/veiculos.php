<?php require_once('cabecalho.php'); ?>

<h2>Veículos</h2>
<a href="novo_veiculo.php" class="btn btn-success mb-3">Novo Registro</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Placa</th>
      <th>Modelo</th>
      <th>Cor</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($_SESSION['veiculos'] as $veiculo){ ?>
      <tr>
        <td><?= $veiculo['id'] ?></td>
        <td><?= $veiculo['placa'] ?></td>
        <td><?= $veiculo['modelo'] ?></td>
        <td><?= $veiculo['cor'] ?></td>
        <td class="d-flex gap-2">
          <a href="alterar_veiculo.php?id=<?= $veiculo['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="consultar_veiculo.php?id=<?= $veiculo['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once('rodape.php'); ?>
