console.log('subcategorias');

const checkAlmidon = document.getElementById('check_almidon');
const checkBioplastico=document.getElementById('check_bioplastico');
const checkPolietileno=document.getElementById('check_polietileno');
const checkOrganica=document.getElementById('check_organica');
const checkCarton=document.getElementById('check_carton');
const checkBagazo=document.getElementById('check_bagazo');
const checkPla=document.getElementById('check_pla');
const checkBambu=document.getElementById('check_bambu');


// envases
checkAlmidon.addEventListener('click',tipoEnvases);
checkBioplastico.addEventListener('click',tipoEnvases);
const divsAlmidon = document.getElementsByClassName('almidon');
const divsBioplastico = document.getElementsByClassName('bioplastico');

// embalajes
checkOrganica.addEventListener('click',tipoEmbalajes);
checkPolietileno.addEventListener('click', tipoEmbalajes);
const divsOrganica = document.getElementsByClassName('organica');
const divsPolietileno = document.getElementsByClassName('polietileno');
// Utensilios
checkCarton.addEventListener('click',tipoUtensilios);
checkBagazo.addEventListener('click', tipoUtensilios);
const divsCarton = document.getElementsByClassName('carton');
const divsBagazo = document.getElementsByClassName('bagazo');
// Papeleria
checkPla.addEventListener('click',tipoPapeleria);
checkBambu.addEventListener('click', tipoPapeleria);
const divsPla = document.getElementsByClassName('pla');
const divsBambu = document.getElementsByClassName('bambu');




function tipoEnvases(){
    for(i =0 ; i < divsAlmidon.length; i++){
        divsAlmidon[i].style.display = checkAlmidon.checked ? 'block' : 'none';
    }

    for(i=0; i< divsBioplastico.length; i++){
        divsBioplastico[i].style.display = checkBioplastico.checked ? 'block' : 'none';
    }
}

function tipoEmbalajes(){
    for(i =0 ; i < divsOrganica.length; i++){
       divsOrganica[i].style.display = checkOrganica.checked ? 'block' : 'none';
    }

    for(i =0 ; i < divsPolietileno.length; i++){
        divsPolietileno[i].style.display = checkPolietileno.checked ? 'block' : 'none';
     }
}

function tipoUtensilios(){
    for(i =0 ; i < divsCarton.length; i++){
       divsCarton[i].style.display = checkCarton.checked ? 'block' : 'none';
    }

    for(i =0 ; i < divsBagazo.length; i++){
        divsBagazo[i].style.display = checkBagazo.checked ? 'block' : 'none';
     }
}

function tipoPapeleria(){
    for(i =0 ; i < divsPla.length; i++){
       divsPla[i].style.display = checkPla.checked ? 'block' : 'none';
    }

    for(i =0 ; i < divsBambu.length; i++){
        divsBambu[i].style.display = checkBambu.checked ? 'block' : 'none';
     }
}