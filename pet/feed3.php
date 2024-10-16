<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petwork</title>
    <link rel="stylesheet" href="novofeed3.css">
    <script defer src="feed.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">🐾 Petwork</div>
        <input type="text" placeholder="Pesquise por pets...">
        <div class="icons">
            <span>🔔</span>
            <span>💬</span>
            <span><?php
            error_reporting(0); 
            session_start();
            $nome = $_SESSION['email']; 
            if(!is_null($nome)){
                header("location: login.php"); 
            }else{
                session_destroy();
            }?>👤</span>
            
          
        </div>
    </header>

    <div class="container">
        <!-- Barra lateral esquerda -->
        <nav class="sidebar-left">
            <ul>
               <?php include('menulateral_excluifeed.php') ?>
            </ul>
        </nav>

        <!-- Feed principal -->
        <main>
            <div class="post-container">
                <form id="post-form">
                    <textarea id="post-text" placeholder="Escreva uma legenda para a sua imagem..."></textarea>
                    <input type="file" id="image-upload" accept="image/*">
                    <button type="submit">Publicar</button>
                </form>
                <div class="image-preview" id="image-preview">
                    <img id="preview-image" src="" alt="Pré-visualização da Imagem">
                </div>
            </div>
            <div id="feed"></div> <!-- Adicionado para o feed de postagens -->
        </main>

        <!-- Barra lateral direita -->
        <aside class="sidebar-right">
            <div class="suggestions">
                <h3>Sugestão para amigos pets!</h3>
                <ul>
                <li><a href="perfilblake.php">🐕 Blake</a></li>
                    <li>🐕 Bella</li>
                    <li>🐈 Luna</li>
                    <li>🐾 Rocky</li>
                </ul>
            </div>
            <div class="ads"></div>
        </aside>
    </div>
    <a href="login.php">Sair</a> 
</body>
</html>
