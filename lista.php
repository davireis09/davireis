
<?php
session_start();

if (!isset($_SESSION["aluno"])) {
    header("Location: index.php");
    exit;
}

require_once "conecta.php";

$sql = "SELECT id, nome, cpf FROM aluno";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Alunos cadastrados</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php while ($aluno = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($aluno["id"]) ?></td>
                <td><?= htmlspecialchars($aluno["nome"]) ?></td>
                <td><?= htmlspecialchars($aluno["cpf"]) ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php">Voltar ao login</a>
</body>
</html>

<?php
$conexao->close();
?>
