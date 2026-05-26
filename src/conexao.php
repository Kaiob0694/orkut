<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$usuario = "root";
$senha = "12345";
$banco = "sistema_login";

$conexao = mysqli_connect($host, $usuario,$senha, $banco);

if (!$conexao) {
    die("Erro na Conexão: " . mysqli_connect_error());
}