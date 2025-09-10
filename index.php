<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
</head>
<body>
    <form action="cria_usuario.php" method="POST">

        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>