<?php
$host = "SEU_HOST";
$usuario = "SEU_USUARIO";
$senha = "SUA_SENHA";
$banco = "if0_43494222_escola";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("ERRO DE CONEXÃO: " . $conexao->connect_error);
}

echo "CONEXÃO COM O BANCO REALIZADA COM SUCESSO!";
?>