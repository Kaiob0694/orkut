<?php
session_start();

require "../src/conexao.php";

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Dados</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Editar Informações</h1>

    <form action="../src/atualizar.php" method="POST">
        <input type="text" name="nome" value="<?= $user['nome'] ?>" required>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <button type="submit">Atualizar</button>
    </form>

    <a href="dashboard.php">Voltar</a>
</div>

</body>
</html>