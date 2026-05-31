<?php
    require_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Estacionamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container login-area d-flex justify-content-center align-items-center">
  <div class="card login-card shadow p-4" style="width: 100%; max-width: 430px;">
    <h3 class="text-center mb-4">Sistema de Controle de Estacionamento</h3>
    <p class="text-center text-muted">Alec Bryan Cardoso e Silva</p>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" placeholder="Digite sua senha" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == "adm@adm" && $senha == '123'){
          $_SESSION['nome'] = 'Alec Bryan';
          $_SESSION['acesso'] = true;
          header('Location: principal.php');
          exit();
        } else {
          $_SESSION['acesso'] = false;
          echo "<p class='text-danger mt-3'>Email e/ou senha incorretos!</p>";
        }
      }
?>

    <p class="text-center mt-3 mb-0">
      Usuário: adm@adm | Senha: 123
    </p>
  </div>
</div>

</body>
</html>
