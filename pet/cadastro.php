<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Petwork</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('petwork2.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        .box {
            background-color: rgba(204, 203, 203, 0.40);
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
        <h1>Comece hoje!</h1>
        <h2>Dê as primeiras pegadas! 🐾</h2>
       <form method="post" enctype="multipart/form-data">
            <label>Foto</label>
            <input class="form-control" type="file" name="arquivo"/>
            <input type="text" placeholder="Nome" name="nome">
            <br><br>
            <input type="text" placeholder="Email" name="email">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <input type="number" placeholder="Telefone" name="telefone">
            <br><br>
            <input type="date" placeholder="Data de Nascimento" name="datanascimento">
            <br><br>
            <input type=submit value=enviar name="enviar">
        </form>
    </div>

    <?php 
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $datanascimento = $_POST['datanascimento'];

        $host = "localhost";
        $user = "root";
        $pass = "";
        $bank = "petwork";

        $con = mysqli_connect($host,$user,$pass,$bank);

        if(!$con){
            echo "Erro na conexao";
        }else{

            $msg = false;

            if(isset($_FILES['arquivo'])){
          
              $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
              $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
              $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
          
              move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
          
              $sql_code = "insert into usuarios(nome,password,email,telefone,datanascimento,foto) values ('$nome','$senha','$email','$telefone','$datanascimento','$novo_nome')";
              $executar = mysqli_query($con,$sql_code);
              if(($executar)){
                $msg = "Arquivo enviado com sucesso!";
                session_start();
                $_SESSION['nome'] = $nome;
                header("location: login.php"); 
              }else{
                $msg = "Falha ao enviar arquivo.";
          
            }
      
        }
        }
    }
    ?>

    <script>
        document.getElementById('loginForm').onsubmit = function(event) {
            event.preventDefault();
            window.location.href = 'login.php'; 
        };
    </script>
</body>
</html>
