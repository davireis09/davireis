
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once "conecta.php";

$cpf = $_POST["cpf"] ?? "";
$senha = $_POST["senha"] ?? "";

$sql = "SELECT id, nome FROM aluno WHERE cpf = ? AND senha = ?";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro na consulta: " . $conexao->error);
}

$stmt->bind_param("ss", $cpf, $senha);
$stmt->execute();

$resultado = $stmt->get_result();

if ($aluno = $resultado->fetch_assoc()) {
    $_SESSION["aluno"] = $aluno;
    header("Location: lista.php");
    exit;
} else {
    echo "CPF ou senha incorretos.";
}

$stmt->close();
$conexao->close();
?>
