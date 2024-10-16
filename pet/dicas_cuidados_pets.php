<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas e Cuidados com Pets</title>
    <link rel="stylesheet" href="dicas_cuidados_pets.css">
    <script defer src="dicas_cuidados_pets.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo"><a href="feed3.php">🐾 Petwork</a></div>
        <input type="text" placeholder="Procure por...">
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
               <?php include('menulateral.php'); ?>
            </ul>
        </nav>

        <!-- Main Content -->
        <main>
            <section class="tips-articles">
                <h2>Dicas e Cuidados com Pets</h2>
                <p>Compartilhe e explore informações sobre cuidados com pets, saúde, alimentação e treinamento.</p>
                <div class="articles">
                    <article>
                        <h3>Cuidados com a Saúde dos Pets</h3>
                        <p>Especialistas discutem os principais cuidados com a saúde dos pets, vacinas, prevenção de doenças e muito mais...</p>
                        <a href="https://www.petlove.com.br/dicas/como-cuidar-da-saude-do-seu-pet-em-cada-fase-da-vida?srsltid=AfmBOooKhfUAOPuR074B8wbYMKzjRT8g6A_OLoADtjihp_bk3pRSsd5j">Leia mais</a>
                    </article>
                    <article>
                        <h3>Dicas de Alimentação</h3>
                        <p>Conheça as melhores opções de ração e alimentos naturais para seu pet.</p>
                        <a href="https://www.petz.com.br/blog/nutricao/alimentacao-natural/">Leia mais</a>
                    </article>
                    <article>
                        <h3>Treinamento de Comportamento</h3>
                        <p>Dicas práticas para educar e treinar seu pet em casa, desde filhotes até pets adultos.</p>
                        <a href="https://panelacopet.com.br/blog/treinamento-positivo">Leia mais</a>
                    </article>
                </div>
            </section>

            <section class="qna">
                <h2>Seção de Perguntas e Respostas</h2>
                <form id="question-form">
                    <textarea id="user-question" placeholder="Tire sua dúvida sobre cuidados com pets"></textarea>
                    <button type="submit">Enviar Pergunta</button>
                </form>
                <div id="questions-list">
                    <!-- Perguntas e respostas dos usuários aparecerão aqui -->
                </div>
            </section>

            <section class="recommendations">
                <h2>Recomendações de Produtos e Serviços</h2>
                <ul>
                    <li>🐕 Ração Premium para Cães - <a href="https://www.petz.com.br/colecao/racoes-premium-e-super-premium">Saiba mais</a></li>
                    <li>🐈 Brinquedos Interativos para Gatos - <a href="https://www.cobasi.com.br/c/gatos/arranhadores-e-brinquedos/brinquedos-interativos?srsltid=AfmBOopDo0AHh9Af_nze0LEBdlWSjqUZZimodWm_2-0lw7Bmsy7WUgi8">Descubra aqui</a></li>
                    <li>🐾 Serviços Veterinários 24h - <a href="https://vitalhospitalveterinario.com.br/">Agende uma consulta</a></li>
            </section>
        </main>

        <!-- Sidebar Right -->
        <aside class="sidebar-right">
            <section class="suggestions">
                <h3>Artigos Recomendados</h3>    
                  <!-- Sarrumar essa bomba --> 
                <ul>
                    <li>🐕 Cuidados Pós-Cirúrgicos - <a href="https://www.ative.pet/reabilitacao/descubra-agora-como-cuidar-de-cachorro-no-pos-operatorio/"></a></li>
                    <li>🐈 Alimentação Natural vs. Industrializada</li>
                    <li>🐾 Dicas para Adestramento de Cães</li>
                </ul>
            </section>
            <div class="ads">
                <h3>Produtos Patrocinados</h3>
                <li>Descubra os melhores acessórios para pets<a href="https://www.ative.pet/reabilitacao/descubra-agora-como-cuidar-de-cachorro-no-pos-operatorio/">aqui!</a></li>
            </div>
        </aside>
    </div>
</body>
</html>
