document.addEventListener("DOMContentLoaded", function() {
    // Funciones para manejar el evento mouseover
    function handleMouseOver(button) {
        button.style.transition = "transform 0.3s ease 0.2s, box-shadow 0.3s ease 0.2s"; // Duración y delay de 0.2 segundos
        button.style.transform = "scale(1.1)"; // Aumentar tamaño
        button.classList.add('shadow-2xl'); // Aumentar sombra
    }

    // Función para manejar el evento mouseout
    function handleMouseOut(button) {
        button.style.transition = "transform 0.3s ease 0.2s, box-shadow 0.3s ease 0.2s"; // Duración y delay de 0.2 segundos
        button.style.transform = "scale(1)"; // Volver a tamaño original
        button.classList.remove('shadow-2xl'); // Quitar sombra grande
    }

    // Enlace a cada botón mediante getElementById y agregar eventos
    const btnTodos = document.getElementById('btn_todos');
    btnTodos.addEventListener('mouseover', () => handleMouseOver(btnTodos));
    btnTodos.addEventListener('mouseout', () => handleMouseOut(btnTodos));

    const btnEnvases = document.getElementById('btn_envases');
    btnEnvases.addEventListener('mouseover', () => handleMouseOver(btnEnvases));
    btnEnvases.addEventListener('mouseout', () => handleMouseOut(btnEnvases));

    const btnPlatos = document.getElementById('btn_platos');
    btnPlatos.addEventListener('mouseover', () => handleMouseOver(btnPlatos));
    btnPlatos.addEventListener('mouseout', () => handleMouseOut(btnPlatos));

    const btnVasos = document.getElementById('btn_vasos');
    btnVasos.addEventListener('mouseover', () => handleMouseOver(btnVasos));
    btnVasos.addEventListener('mouseout', () => handleMouseOut(btnVasos));

    const btnCubiertos = document.getElementById('btn_cubiertos');
    btnCubiertos.addEventListener('mouseover', () => handleMouseOver(btnCubiertos));
    btnCubiertos.addEventListener('mouseout', () => handleMouseOut(btnCubiertos));

    const btnBolsas = document.getElementById('btn_bolsas');
    btnBolsas.addEventListener('mouseover', () => handleMouseOver(btnBolsas));
    btnBolsas.addEventListener('mouseout', () => handleMouseOut(btnBolsas));

    const btnPapeleria = document.getElementById('btn_papeleria');
    btnPapeleria.addEventListener('mouseover', () => handleMouseOver(btnPapeleria));
    btnPapeleria.addEventListener('mouseout', () => handleMouseOut(btnPapeleria));

    // Filtrar productos por categoría
    const botones = document.querySelectorAll('button[id^="btn_"]'); // Selecciona todos los botones de categoría
    const productos = document.querySelectorAll('.todos'); // Selecciona todos los productos

    botones.forEach((boton) => {
        boton.addEventListener("click", () => {
            const categoria = boton.id.replace("btn_", ""); // Obtiene la categoría del ID del botón
            productos.forEach((producto) => {
                if (categoria === "todos" || producto.classList.contains(categoria)) {
                    producto.style.display = "block"; // Muestra productos de la categoría seleccionada
                } else {
                    producto.style.display = "none"; // Oculta productos de otras categorías
                }
            });
        });
    });
});
