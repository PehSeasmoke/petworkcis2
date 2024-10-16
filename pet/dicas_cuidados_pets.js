const questionForm = document.getElementById('question-form');
const questionsList = document.getElementById('questions-list');

// Função para adicionar nova pergunta
questionForm.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const userQuestion = document.getElementById('user-question').value;
    if (userQuestion.trim() === "") return; // Evita envio de perguntas vazias

    // Cria um novo elemento de pergunta
    const questionItem = document.createElement('div');
    questionItem.classList.add('question-item');
    questionItem.innerHTML = `<p><strong>Pergunta:</strong> ${userQuestion}</p>`;

    questionsList.prepend(questionItem); // Adiciona no início da lista de perguntas
    document.getElementById('user-question').value = ''; // Limpa o campo
});
