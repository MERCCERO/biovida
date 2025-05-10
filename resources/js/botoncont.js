const button = document.getElementById('contactButton'); 

        // Función para manejar el mouseover
        function handleMouseOver() {
            button.classList.remove('bg-green-500', 'shadow-md');
            button.classList.add('bg-green-700', 'transform', 'scale-105', 'animate-bounce', 'shadow-lg');
        }

        // Función para manejar el mouseout
        function handleMouseOut() {
            button.classList.remove('bg-green-700', 'transform', 'scale-105', 'animate-bounce', 'shadow-lg');
            button.classList.add('bg-green-500', 'shadow-md');
        }

        // Agregar eventos al botón
        button.addEventListener('mouseover', handleMouseOver);
        button.addEventListener('mouseout', handleMouseOut);