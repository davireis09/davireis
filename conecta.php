<?php
$host = "sql113.infinityfree.com";
$usuario = "if0_43494222";
$senha = "4OlUNF6caHrBcD";
$banco = "if0_43494222_escola";

try {
    $conexao = new mysqli($host, $usuario, $senha, $banco);
    $conexao->set_charset("utf8mb4");

    echo "CONEXÃO REALIZADA COM SUCESSO!";

} catch (mysqli_sql_exception $e) {
    die("ERRO MYSQL: " . $e->getMessage());
}
?>