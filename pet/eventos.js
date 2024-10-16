const eventForm = document.getElementById('event-form');
const calendar = document.querySelector('.calendar');

// Função para criar um novo evento
eventForm.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const eventName = document.getElementById('event-name').value;
    const eventDate = document.getElementById('event-date').value;
    const eventLocation = document.getElementById('event-location').value;
    const eventDescription = document.getElementById('event-description').value;

    // Criar um novo elemento de evento
    const newEvent = document.createElement('div');
    newEvent.classList.add('event');
    newEvent.innerHTML = `
        <h4>${eventName}</h4>
        <p><strong>Data:</strong> ${eventDate}</p>
        <p><strong>Local:</strong> ${eventLocation}</p>
        <p>${eventDescription}</p>
        <button class="register-btn">Confirmar Presença</button>
    `;

    // Adiciona o novo evento ao calendário
    calendar.appendChild(newEvent);

    // Limpa os campos do formulário
    eventForm.reset();
});
