
console.log("categorias");

const btnTodos=document.getElementById('btn_todos');
const btnEnvases=document.getElementById('btn_envases');
const btnEmbalajes=document.getElementById('btn_platos');
const btnUtensilios=document.getElementById('btn_vasos');
const btnPapeleria=document.getElementById('btn_cubiertos');

btnTodos.addEventListener('click', todos);
btnEnvases.addEventListener('click', envases);
btnEmbalajes.addEventListener('click', embalajes);
btnUtensilios.addEventListener('click', utensilios);
btnPapeleria.addEventListener('click', papeleria);

const divsTodos=document.getElementsByClassName('todos');
const divsEnvases=document.getElementsByClassName('envases');
const divsEmbalajes=document.getElementsByClassName('embalajes');
const divsUtensilios=document.getElementsByClassName('utensilios');
const divsPapeleria=document.getElementsByClassName('papeleria');

function todos() {
    console.log('Todos los productos');
    for (let index = 0; index < divsTodos.length; index++) {
        divsTodos[index].style.display='block';
    }
}

function envases() {
    console.log('Envases');
    for (let index = 0; index < divsTodos.length; index++) {
        divsTodos[index].style.display='none';
    }
    for (let index = 0; index < divsEnvases.length; index++) {
        divsEnvases[index].style.display='block';
    }
}

function embalajes() {
    console.log('Embalajes');
    for (let index = 0; index < divsTodos.length; index++) {
        divsTodos[index].style.display='none';
    }
    for (let index = 0; index < divsEmbalajes.length; index++) {
        divsEmbalajes[index].style.display='block';
    }
}

function utensilios() {
    console.log('Utensilios');
    for (let index = 0; index < divsTodos.length; index++) {
        divsTodos[index].style.display='none';
    }
    for (let index = 0; index < divsUtensilios.length; index++) {
        divsUtensilios[index].style.display='block';
    }
}

function papeleria() {
    console.log('Papelería');
    for (let index = 0; index < divsTodos.length; index++) {
        divsTodos[index].style.display='none';
    }
    for (let index = 0; index < divsPapeleria.length; index++) {
        divsPapeleria[index].style.display='block';
    }
}
