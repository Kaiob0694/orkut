<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orkut</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

  <div class="main-box">

    <div class="left-panel">

      <div class="logo-area">
        <img src="img/orkut.png" alt="logo">
      </div>

    </div>

    <div class="right-panel">

      <div class="login-box">

        <p class="login-title">
          Acesse o orkut com sua conta
        </p>

        <div class="form-group">
          <label>E-mail:</label>
          <input type="email" id="email">
        </div>

        <div class="form-group">
          <label>Senha:</label>
          <input type="password" id="senha">
        </div>

        <button class="btn-login">
          Login
        </button>

      </div>

    </div>

  </div>

</div>

<script src="js/login.js"></script>

</body>
</html>