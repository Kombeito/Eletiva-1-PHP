<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 1 da lista 5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 5 - Exercício 1</h1>
<form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="mb-3">
            <label for="nome<?= $i ?>" class="form-label">digite um Nome: <?= $i ?>:</label>
            <input type="text" id="nome<?= $i ?>" name="nome<?= $i ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone<?= $i ?>" class="form-label">digite um numero de telefone: <?= $i ?>:</label>
            <input type="text" id="telefone<?= $i ?>" name="telefone<?= $i ?>" class="form-control" required>
        </div>
    <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contatos = [];

    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $telefone = $_POST["telefone$i"];

        if (isset($contatos[$nome])) {
            echo "<div class='alert alert-warning'>Nome duplicado: $nome</div>";
        }
        if (in_array($telefone, $contatos)) {
            echo "<div class='alert alert-warning'>telefone duplicado: $telefone</div>";
        }
        $contatos[$nome] = $telefone;
    }

    ksort($contatos);
    echo "<h5>Lista de Contatos (ordenada)</h5><ul>";
    foreach ($contatos as $nome => $telefone) {
        echo "<li>$nome - $telefone</li>";
    }
    echo "</ul>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>