<?php 
    session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

    }

    $sql = "SELECT * FROM users WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            
            $_SESSION['loggedin'] = true;

            header("location: site.php");
            exit;

        } else {
            echo "Senha inválida";
        }

    } else {
            $error = "Nome de usuário ou e-mail inválido";
        }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>

    <form action="index.php" method="post">
        Nome: <input type="text" name="name" required><br>

        E-mail: <input type="email" name="email" required><br>
        
        Senha: <input type="password" name="password" required><br>
        
        <input type="submit" value="Logar">

    </form>
    <br>
    <a href="cadastrar.php"> Ainda não é cadastrado?</a>

</body>
</html>