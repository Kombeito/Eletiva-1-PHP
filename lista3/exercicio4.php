<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4 da lista 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Lista 2 - Exercicio 4</h1>
<form method="post">
  <div class="mb-3">
    <label for="num1" class="form-label">Digite um número:</label>
    <input type="number" id="num1" step="0.01" name="num1" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $preco = (int)$_POST['num1'];
    
    if ($preco > 100){
        $valordescontado = $preco - ($preco * (15 / 100));
        $numero_formatado = number_format($valordescontado, 2, ',', '.');
        echo "<p> O valor do produto com desconto fica: R$$numero_formatado </p>";
    } else{
        echo "<p>O preço do produto é menor que R$100,00. Então continua sendo" . $preco . "<p>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>