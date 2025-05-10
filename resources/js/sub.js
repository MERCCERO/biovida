// Obtener el botón por su ID
const subButton = document.getElementById('subButton');

// Evento para cuando el mouse pasa sobre el botón
subButton.addEventListener('mouseover', () => {
  subButton.classList.remove('bg-green-500');  
  subButton.classList.add('bg-green-700', 'scale-110', 'shadow-lg');  
});

// Evento para cuando el mouse sale del botón
subButton.addEventListener('mouseout', () => {
  subButton.classList.remove('bg-green-700', 'scale-110', 'shadow-lg');  
  subButton.classList.add('bg-green-500');  
});

