
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Escola</title>
</head>
<body>
    <h1>Login do Aluno</h1>

    <form action="login.php" method="POST">
        <label>CPF:</label>
        <input type="text" name="cpf" maxlength="11" required>

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
