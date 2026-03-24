<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 12 - Lista 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<h1>Lista 1 - exercício 12</h1>
<form method="post">
<div class="mb-3">
              <label for="base" class="form-label">Digite o numero base:</label>
              <input type="number" id="base" step="0.01" name="base" class="form-control" required="">
            </div>
<div class="mb-3">
              <label for="expoente" class="form-label">Digite o numero do expoente:</label>
              <input type="number" id="expoente" step="0.01" name="expoente" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $base = $_POST['base'];
    $expoente = $_POST['expoente'];
    $conta = pow($base, $expoente);
    $resultado_formatado = number_format($conta, 2, ',');

    echo "<p>O resultado do numero sobre o expoente é: $resultado_formatado m²</p>";
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>