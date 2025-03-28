<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastrar</h1>
    
        <form action="cadastro.php" method="post">
            Nome: <input type="text" name="name" required><br>
    
            E-mail: <input type="email" name="email" required><br>
            
            Senha: <input type="password" name="password" required><br>
            
            <input type="submit">
    
        </form>
        <br>
        <a href="index.php">Faça login!</a>
    
</body>
</html>