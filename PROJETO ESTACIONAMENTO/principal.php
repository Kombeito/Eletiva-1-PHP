<?php
    require_once('cabecalho.php');

    $totalVeiculos = count($_SESSION['veiculos']);
    $totalClientes = count($_SESSION['clientes']);
    $totalVagas = count($_SESSION['vagas']);
    $totalMovimentos = count($_SESSION['movimentacoes']);
?>

<h2>Seja bem-vindo, <?= $_SESSION['nome'] ?></h2>
<p>O meu sistema controla o cadastro de clientes, veículos, vagas e o registro de entrada e saída dos veículos.</p>

<div class="row mt-4">
  <div class="col-md-3 mb-3">
    <div class="card text-center">
      <div class="card-body">
        <h5>Clientes</h5>
        <h2><?= $totalClientes ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card text-center">
      <div class="card-body">
        <h5>Veículos</h5>
        <h2><?= $totalVeiculos ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card text-center">
      <div class="card-body">
        <h5>Vagas</h5>
        <h2><?= $totalVagas ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card text-center">
      <div class="card-body">
        <h5>Movimentos</h5>
        <h2><?= $totalMovimentos ?></h2>
      </div>
    </div>
  </div>
</div>

<?php
    require_once('rodape.php');
?>
