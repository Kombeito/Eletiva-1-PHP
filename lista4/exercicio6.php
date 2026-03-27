<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 6 da lista 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 4 - Exercício 6</h1>
<form method="post">
<div class="mb-3">
    <label for="numero" class="form-label">Digite um número DECIMAL:</label>
    <input type="number" id="numero" name="numero" class="form-control" step="0.01" required>
</div>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numero = $_POST['numero'];
        $redondo = round($numero);
        $cima = ceil($numero);
        $baixo = floor($numero);

        echo "<p>Arredondado para cima fica $cima .</p>";
        echo "<p>Arredondado para baixo fica $baixo.</p>";
        echo "<p> O número $numero arredondado fica $redondo.</p>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>