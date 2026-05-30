<?php require_once('cabecalho.php'); ?>

<h2>Vagas</h2>
<a href="nova_vaga.php" class="btn btn-success mb-3">Novo Registro</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Número</th>
      <th>Setor</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($_SESSION['vagas'] as $vaga){ ?>
      <tr>
        <td><?= $vaga['id'] ?></td>
        <td><?= $vaga['numero'] ?></td>
        <td><?= $vaga['setor'] ?></td>
        <td><?= $vaga['status'] ?></td>
        <td class="d-flex gap-2">
          <a href="alterar_vaga.php?id=<?= $vaga['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="consultar_vaga.php?id=<?= $vaga['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once('rodape.php'); ?>
