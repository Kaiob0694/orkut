<?php
require "conexao.php";

$titulo  = trim($_POST['titulo']);
$autor = trim($_POST['autor']);
$isbn = trim($_POST['isbn']);
$ano = trim($_POST['ano']);

$sql = "INSERT INTO livros (titulo, autor, isbn, ano)
        VALUES ('$titulo', '$autor', '$isbn', '$ano')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../public/dashboard.php");
    exit;
} else {
    echo "Erro ao cadastrar usuário";
}
