<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container py-3">
    <h1>bananinha</h1>
    <h3>data de hoje:<?php echo date("d/m/y"); ?></h3>
    <form method="post" action="resposta.php">
    <div class="mb-3">
                <label for="Issobanana" class="form-label">banana</label>
                <input type="text" id="Issobanana" name="Issobanana" class="form-control" required="">
                </div><div class="mb-3">
                <label for="data" class="form-label">data</label>
                <input type="date" id="data" name="data" class="form-control">
                </div><div class="mb-3">
                <label for="senha" class="form-label">senha</label>
                <input type="password" id="senha" name="senha" class="form-control">
                </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>
</html>