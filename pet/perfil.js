// Mostrar e esconder amigos
document.getElementById('toggle-friends').addEventListener('click', () => {
    const friendsList = document.getElementById('friends-list');
    const button = document.getElementById('toggle-friends');
    
    if (friendsList.style.display === 'none' || friendsList.style.display === '') {
        friendsList.style.display = 'block';
        button.textContent = 'Esconder Amigos';
    } else {
        friendsList.style.display = 'none';
        button.textContent = 'Mostrar Amigos';
    }
});

// Publicar um novo post
document.getElementById('publish-post').addEventListener('click', () => {
    const postContent = document.getElementById('post-content').value.trim();
    
    if (postContent) {
        const postsContainer = document.getElementById('posts-container');

        const newPost = document.createElement('div');
        newPost.className = 'post';
        
        newPost.innerHTML = `
            <div class="post-header">Usuário</div>
            <div class="post-body">${postContent}</div>
            <div class="post-actions">
                <button>Curtir</button>
                <button>Comentar</button>
                <button>Compartilhar</button>
            </div>
        `;
        
        postsContainer.prepend(newPost);
        document.getElementById('post-content').value = ''; // Limpar o campo de texto
    } else {
        alert('Por favor, insira algum conteúdo para o post.');
    }
});

// Editar o status do usuário
document.getElementById('edit-status').addEventListener('click', () => {
    const currentStatus = document.getElementById('user-status').innerText;
    const newStatus = prompt('Edite seu status:', currentStatus);

    if (newStatus !== null && newStatus.trim() !== '') {
        document.getElementById('user-status').innerHTML = `${newStatus} <button id="edit-status">✏️</button>`;
    }
});

// Editar o status do usuário
document.getElementById('edit-status').addEventListener('click', () => {
    const currentStatus = document.getElementById('user-status').innerText;
    const newStatus = prompt('Edite seu status:', currentStatus);

    if (newStatus !== null && newStatus.trim() !== '') {
        document.getElementById('user-status').innerHTML = `${newStatus} <button id="edit-status">✏️</button>`;
    }
});
