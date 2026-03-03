<?php
$arquivo = "contador.txt";

// Se o arquivo não existir, cria com 0
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, 0);
}

// Lê o número atual
$codigoAtual = (int) file_get_contents($arquivo);

// Se clicou em Próximo
if (isset($_POST['proximo'])) {
    $codigoAtual++;
    file_put_contents($arquivo, $codigoAtual);
}

// Se clicou em Resetar
if (isset($_POST['resetar'])) {
    $codigoAtual = 0;
    file_put_contents($arquivo, $codigoAtual);
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 100%; max-width: 700px;">
<h4 class="mb-4">Cadastro</h4>

<form method="post">

<div class="row mb-3">
<div class="col-md-3">
<label class="form-label">Código</label>
<input type="text" class="form-control" 
       value="<?php echo $codigoAtual; ?>" readonly>
</div>
</div>

<div class="d-flex justify-content-end gap-2">
<button type="submit" name="resetar" class="btn btn-danger">
Resetar
</button>

<button type="submit" name="proximo" class="btn btn-success">
Próximo
</button>
</div>

</form>
</div>

</body>
</html>