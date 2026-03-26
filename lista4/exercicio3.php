<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 3 da lista 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 4 - Exercício 3</h1>
<form method="post">
<div class="mb-3">
    <label for="palavra" class="form-label">Digite uma palavra:</label>
    <input type="text" id="palavra" name="palavra" class="form-control" required>
</div>
<div class="mb-3">
    <label for="palavra2" class="form-label">Digite outra palavra:</label>
    <input type="text" id="palavra2" name="palavra2" class="form-control" required>
</div>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $palavra = $_POST['palavra'];
        $palavra2 = $_POST['palavra2'];

        if (strpos($palavra, $palavra2) !== false){
            echo"<p>A palavra '$palavra2' está contida em '$palavra'.</p>";
        } else {
        echo"<p>A palavra '$palavra2' NÃO está contida em '$palavra'.</p>";

        }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>