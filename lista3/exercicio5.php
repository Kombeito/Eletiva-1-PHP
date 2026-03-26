<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 5 da lista 3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Lista 3 - Exercício 5</h1>
<form method="post">
  <div class="mb-3">
    <label for="mes" class="form-label">Digite um número (de 1 a 12):</label>
    <input type="number" id="mes" name="mes" min="1" max="12" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mes = (int)$_POST['mes'];
    
    switch ($mes) { 
        case 1: $nome = "Janeiro"; break;
        case 2: $nome = "Fevereiro"; break;
        case 3: $nome = "Março"; break;
        case 4: $nome = "Abril"; break;
        case 5: $nome = "Maio"; break;
        case 6: $nome = "Junho"; break;
        case 7: $nome = "Julho"; break;
        case 8: $nome = "Agosto"; break;
        case 9: $nome = "Setembro"; break;
        case 10: $nome = "Outubro"; break;
        case 11: $nome = "Novembro"; break;
        case 12: $nome = "Dezembro"; break;
        default: $nome = "Mês inválido!";
    }
    echo "<div class='alert alert-info mt-3'>$nome</div>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>