<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 2 da lista 5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 5 - Exercício 2</h1>
<form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <h5>Aluno <?= $i ?></h5>
        <div class="mb-3">
        <input type="text" name="aluno<?= $i ?>" class="form-control mb-2" placeholder="Nome" required>
        <input type="number" step="0.01" name="n<?= $i ?>1" class="form-control mb-2" placeholder="Nota 1" required>
        <input type="number" step="0.01" name="n<?= $i ?>2" class="form-control mb-2" placeholder="Nota 2" required>
        <input type="number" step="0.01" name="n<?= $i ?>3" class="form-control mb-2" placeholder="Nota 3" required>
        </div>
    <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $medias = [];

    for ($i = 1; $i <= 5; $i++) {
        $aluno = $_POST["aluno$i"];
        $media = ($_POST["n{$i}1"] + $_POST["n{$i}2"] + $_POST["n{$i}3"]) / 3;
        $medias[$aluno] = $media;
    }

    arsort($medias);
    echo "<h5>Médias dos Alunos em ordem: </h5><ul>";
    foreach ($medias as $aluno => $media) {
        echo "<li>$aluno - Média: " . number_format($media, 2, ',', '.') . "</li>";
    }
    echo "</ul>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>