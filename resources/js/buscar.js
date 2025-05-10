const buscador = document.getElementById('buscador');
    const categorias = ['envases', 'platos', 'vasos', 'cubiertos', 'bolsas', 'papeleria'];

    
    buscador.addEventListener('input', function () {
        const query = buscador.value.toLowerCase();  

        
        categorias.forEach(categoria => {
            const items = document.querySelectorAll(`.${categoria}`);

            
            items.forEach(function (item) {
                const titulo = item.querySelector('h6').textContent.toLowerCase(); 
                if (titulo.includes(query)) {
                    item.style.display = 'block'; 
                } else {
                    item.style.display = 'none';  
                }
            });
        });
    });
