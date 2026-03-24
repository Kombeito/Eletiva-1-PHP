<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 13 - Lista 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 1 - exercício 13</h1>
<form method="post">
<div class="mb-3">
              <label for="metros" class="form-label">Digite o tamanho em metros que deseja converter para centimentros:</label>
              <input type="number" id="metros" step="0.01" name="metros" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $metros = $_POST['metros'];
    $centimetros = $metros * 100;
    $resultado_formatado = number_format($centimetros, 2, ',');

    echo "<p>O resultado do numero sobre o expoente é: $resultado_formatado m²</p>";
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>