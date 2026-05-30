<?php require_once('cabecalho.php'); ?>

<h2>Clientes:</h2>
<a href="novo_cliente.php" class="btn btn-success mb-3">Novo Registro</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>CPF</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($_SESSION['clientes'] as $cliente){ ?>
      <tr>
        <td><?= $cliente['id'] ?></td>
        <td><?= $cliente['nome'] ?></td>
        <td><?= $cliente['telefone'] ?></td>
        <td><?= $cliente['cpf'] ?></td>
        <td class="d-flex gap-2">
          <a href="alterar_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="consultar_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once('rodape.php'); ?>
