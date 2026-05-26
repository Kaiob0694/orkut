<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/style_cadastro.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Livro</h1>

    <form action="../src/cadastrar_livro.php" method="POST">
        <input type="text" name="titulo" placeholder="Titulo" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="text" name="isbn" placeholder="ISBN" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <button type="submit">Salvar</button>
    </form>

    <a href="index.php">Voltar para login</a>

</div>

</body>
</html>