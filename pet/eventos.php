<?php 
error_reporting(0);
session_start();
$nome = $_SESSION['email']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos e Encontros</title>
    <link rel="stylesheet" href="eventos.css">
    <script defer src="eventos.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo"><a href="feed3.php">🐾 Petwork</a></div>
        <input type="text" placeholder="Pesquise por eventos...">
        <div class="icons">
            <span>🔔</span>
            <span>💬</span>
            <span>👤</span>
        </div>
    </header>

    <div class="container">
        <!-- Sidebar Left -->
        <nav class="sidebar-left">
            <ul>
               <?php include('menulateral.php') ?>
            </ul>
        </nav>

        <!-- Main Content -->
        <main>
            <section class="events-section">
                <h2>Eventos e Encontros para Pets</h2>
                <p>Explore eventos locais para pets e se inscreva para participar!</p>

                <!-- Calendário de Eventos -->
                <div class="calendar">
                    <h3>Calendário de Eventos</h3>
                    <div class="event">
                        <h4>Feira de Adoção de Pets</h4>
                        <p><strong>Data:</strong> 15 de Outubro</p>
                        <p><strong>Local:</strong> Parque Central</p>
                        <button class="register-btn">Confirmar Presença</button>
                    </div>
                    <div class="event">
                        <h4>Encontro de Cães da Raça Golden Retriever</h4>
                        <p><strong>Data:</strong> 22 de Outubro</p>
                        <p><strong>Local:</strong> Praia do Sol</p>
                        <button class="register-btn">Confirmar Presença</button>
                    </div>
                    <div class="event">
                        <h4>Passeio em Grupo no Parque</h4>
                        <p><strong>Data:</strong> 29 de Outubro</p>
                        <p><strong>Local:</strong> Bosque dos Animais</p>
                        <button class="register-btn">Confirmar Presença</button>
                    </div>
                </div>

                <!-- Fotos de Eventos Passados -->
                <div class="past-events">
                    <h3>Eventos Anteriores</h3>
                    <div class="event-photo">
                        <img src="feira-de-adocao_reduzidas_gustavo-garbino-1.jpg" alt="Evento 1">
                        <p>Feira de Adoção - Setembro</p>
                    </div>
                    <div class="event-photo">
                        <img src="shutterstock_75891091.jpg" alt="Evento 2">
                        <p>Encontro de Bulldogs - Agosto</p>
                    </div>
                    <div class="event-photo">
                        <img src="passear_com_cachorro_no_parque-300x300.png" alt="Evento 3">
                        <p>Passeio no Parque - Julho</p>
                    </div>
                </div>

                <!-- Criar Novo Evento -->
                <div class="create-event">
                    <h3>Criar Novo Evento</h3>
                    <form id="event-form">
                        <input type="text" id="event-name" placeholder="Nome do Evento" required>
                        <input type="date" id="event-date" required>
                        <input type="text" id="event-location" placeholder="Local do Evento" required>
                        <textarea id="event-description" placeholder="Descrição do Evento"></textarea>
                        <button type="submit">Criar Evento</button>
                    </form>
                </div>
            </section>
        </main>

        <!-- Sidebar Right -->
        <aside class="sidebar-right">
            <div class="suggestions">
                <h3>Dicas Pet-Friendly</h3>
                <ul>
                    <li>🐾 Restaurantes que aceitam pets</li>
                    <li>🌳 Parques e Praças para Passear</li>
                    <li>🎉 Eventos Pet-Friendly na sua região</li>
                </ul>
            </div>
            <div class="ads">
                <h3>Produtos Patrocinados</h3>
                <p>Encontre os melhores acessórios para eventos ao ar livre com pets!</p>
            </div>
        </aside>
    </div>
</body>
</html>
