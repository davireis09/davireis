<?php
$host = "sql113.infinityfree.com";
$usuario = "if0_43494222";
$senha = "4OlUNF6caHrBcD";
$banco = "if0_43494222_escola";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
?>