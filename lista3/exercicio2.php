<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 2 da lista 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Lista 2 - Exercicio 2</h1>
<form method="post">
  <div class="mb-3">
    <label for="num1" class="form-label">Digite um número:</label>
    <input type="number" id="num1" name="num1" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Digite outro número:</label>
    <input type="number" id="num2" name="num2" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = (int)$_POST['num1'];
    $b = (int)$_POST['num2'];
    $soma = $a + $b;
    
    if ($a == $b){
        $resultado = 3 * $soma;
        echo "<div class='alert alert-success mt-3'>Como os números são iguais. Segue o triplo da soma = $resultado</div>";
    } else {
        echo "<div class='alert alert-info mt-3'>Soma = $soma</div>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>