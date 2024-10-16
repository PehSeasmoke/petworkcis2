<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssperfil.css">
    <title>Página de Perfil </title>
</head>
<body>


    <!-- Barra de Navegação Superior -->
    <header class="navbar">
       
        <nav class="nav-icons">
        <ul>
                <li><a href="feed3.php">🏠 Inicio</a></li>
                <li><a href="perfil.php">🐾 Perfil</a></li>
                <li><a href="eventos.php">🎉 Eventos</a></li>
                <li><a href="dicas_cuidados_pets.php">📘 Dicas e Cuidados</a></li>


        </ul>

        </nav>
    </header>

    <!-- Seção de Capa e Foto de Perfil -->
    <section class="profile-header">
        <div class="cover-photo">
            <img src="shutterstock_75891091.jpg" alt="Capa" />
        </div>
        
        <div class="profile-info">
            <div class="profile-pic">
                <img src="png-transparent-dobermann-german-pinscher-great-dane-beauceron-golden-retriever-golden-retriever-animals-carnivoran-dog-like-mammal.png" alt="Foto de Perfil" />
            </div>
            
            <div class="user-info">
                <h1 id="username">Doberman </h1>
                <p id="user-status">Descrição ou status do usuário <button id="edit-status">✏️</button></p>
                <button id="add-friend">Adicionar Amigo</button>
                <button>Mensagem</button>
            </div>
        </div>
    </section>


    <!-- Container principal -->
    <div class="profile-container">
        <!-- Seção da esquerda: Sobre e Amigos -->
        <aside class="left-section">
            <div class="about">
                <h2>Sobre</h2>
                <p>Informações sobre o usuário, como cidade, trabalho, estudos, etc.</p>
            </div>
            <div class="friends">
                <h2>Amigos</h2>
                <ul id="friends-list">
                    <li><img src="png-transparent-puppy-german-shepherd-desktop-puppy-mammal-animals-carnivoran-thumbnail.png" alt="Amigo 1"> Amigo 1</li>
                    <li><img src="png-transparent-puppy-german-shepherd-desktop-puppy-mammal-animals-carnivoran-thumbnail.png" alt="Amigo 2"> Amigo 2</li>
                    <li><img src="png-transparent-puppy-german-shepherd-desktop-puppy-mammal-animals-carnivoran-thumbnail.png" alt="Amigo 3"> Amigo 3</li>
                </ul>
                <button id="toggle-friends">Mostrar Amigos</button>
            </div>
        </aside>

        <!-- Seção da direita: Posts -->
        <section class="posts-section">
            <div class="post-input">
                <textarea id="post-content" placeholder="No que você está pensando?"></textarea>
                <button id="publish-post">Publicar</button>
                <button>Curtir</button>
                        <button>Comentar</button>
                        <button>Compartilhar</button>
            </div>

            <div id="posts-container">
                <div class="post">
                    
                    
                    <div class="post-actions">
                       
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="perfil.js"></script>
</body>
</html>
