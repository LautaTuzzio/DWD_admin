// Funciones para la botonera principal
function show_directivos() {
    document.getElementById('directivos').style.display = 'flex';
    document.getElementById('especialidades').style.display = 'none';
    document.getElementById('novedades').style.display = 'none';
    document.getElementById("default").style.display= "none"

}

function show_especialidades() {
    document.getElementById('directivos').style.display = 'none';
    document.getElementById('especialidades').style.display = 'flex';
    document.getElementById('novedades').style.display = 'none';
    document.getElementById("default").style.display= "none"

}

function show_novedades() {
    document.getElementById('directivos').style.display = 'none';
    document.getElementById('especialidades').style.display = 'none';
    document.getElementById('novedades').style.display = 'flex';
    document.getElementById("default").style.display= "none"

}

// Funciones para sección Directivos
function show_update_d() {
    document.getElementById('update_d').style.display = 'block';
    document.getElementById('delete_d').style.display = 'none';
    document.getElementById('create_d').style.display = 'none';
}

function show_delete_d() {
    document.getElementById('update_d').style.display = 'none';
    document.getElementById('delete_d').style.display = 'block';
    document.getElementById('create_d').style.display = 'none';
}

function show_create_d() {
    document.getElementById('update_d').style.display = 'none';
    document.getElementById('delete_d').style.display = 'none';
    document.getElementById('create_d').style.display = 'block';
}

// Funciones para sección Especialidades
function show_update_e() {
    document.getElementById('update_e').style.display = 'block';
    document.getElementById('delete_e').style.display = 'none';
    document.getElementById('insert_e').style.display = 'none';
}

function show_delete_e() {
    document.getElementById('update_e').style.display = 'none';
    document.getElementById('delete_e').style.display = 'block';
    document.getElementById('insert_e').style.display = 'none';
}

function show_create_e() {
    document.getElementById('update_e').style.display = 'none';
    document.getElementById('delete_e').style.display = 'none';
    document.getElementById('insert_e').style.display = 'block';
}

// Funciones para sección Novedades
function show_update_n() {
    document.getElementById('update_n').style.display = 'block';
    document.getElementById('delete_n').style.display = 'none';
    document.getElementById('insert_n').style.display = 'none';
}

function show_delete_n() {
    document.getElementById('delete_n').style.display = 'block';
    document.getElementById('update_n').style.display = 'none';
    document.getElementById('insert_n').style.display = 'none';
}

function show_insert_n() {
    document.getElementById('insert_n').style.display = 'block';
    document.getElementById('update_n').style.display = 'none';
    document.getElementById('delete_n').style.display = 'none';
}
