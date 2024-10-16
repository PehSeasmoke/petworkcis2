<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Petwork</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('pepe.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        .box {
            background-color: rgba(204, 203, 203, 0.30);
            padding: 80px;
            border-radius: 15px;
            color: black;
            position: relative;
            z-index: 1;
        }
        h1 { color: #00897b;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            
        }
        h2 {
            text-align: center;
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 17px;
            width: 100%;
        }
        button {
            background-color: #00897b;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 17px;
        }
        button:hover {
            background-color: #29a195;
            cursor: pointer;
        }
        .image {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 430px;
            height: auto; 
            z-index: 0;
        }
        .left {
            left: 6%; 
        }
        .right {
            right: 6%; 
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Olá de novo!</h1>
    <h2>Bem-vindo de volta! 🐾</h2>
    <form method="post">
        <input type="text" placeholder="Email" name="email" required>
        <br><br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br><br>
        <input type="submit" value="Entrar" name="entrar">
    </form>
</div>

<?php 
if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bank = "petwork";

    $con = mysqli_connect($host, $user, $pass, $bank);

    if (!$con) {
        echo "Erro na conexão";
    } else {
        // Usando uma consulta SELECT para verificar o usuário
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$senha'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Inicia a sessão e redireciona para a página de feed
            session_start();
            $_SESSION['email'] = $email; // ou qualquer outra informação que você queira armazenar
            echo $email;
            echo $senha;
            header("location: feed3.php");
           
        } else {
            // Usuário não encontrado
            echo "<p style='color: red;'>Usuário não encontrado</p>";
        }
    }
}
?>


    <script>
        document.getElementById('loginForm').onsubmit = function(event) {
            event.preventDefault();
            window.location.href = 'feed3.php'; 
        };
    </script>
</body>
</html>
