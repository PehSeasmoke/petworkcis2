document.getElementById('image-upload').addEventListener('change', function() {
    const file = this.files[0];
    const previewImage = document.getElementById('preview-image');
    const imagePreview = document.getElementById('image-preview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImage.src = e.target.result;
            imagePreview.style.display = 'block'; // Exibe a pré-visualização
        }
        reader.readAsDataURL(file);
    } else {
        previewImage.src = '';
        imagePreview.style.display = 'none'; // Esconde a pré-visualização
    }
});

document.getElementById('post-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário

    const postText = document.getElementById('post-text').value;
    const file = document.getElementById('image-upload').files[0];

    if (postText.trim() === "" || !file) return; // Evita postagens vazias ou sem imagem

    const feed = document.getElementById('feed');
    const post = document.createElement('div');
    post.classList.add('post');

    const reader = new FileReader();
    reader.onload = function(e) {
        post.innerHTML = `
        <div class="card" style="width: 18rem;">
            <img src="${e.target.result}" class="card-img-top" alt="Pet">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Legenda: ${postText}</p>
            </div>
            <ul class="list-group list-group-flush">
            <button>Curtir</button>
            <button>Comentar</button>
            <button>Compartilhar</button>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    `;
        feed.prepend(post); // Adiciona a nova postagem no topo do feed
        document.getElementById('post-text').value = ''; // Limpa a área de texto
        document.getElementById('image-upload').value = ''; // Limpa o input de arquivo
        document.getElementById('preview-image').src = ''; // Limpa a pré-visualização
        document.getElementById('image-preview').style.display = 'none'; // Esconde a pré-visualização
    }
    reader.readAsDataURL(file);
});
