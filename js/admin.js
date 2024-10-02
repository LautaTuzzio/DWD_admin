function show_directivos(){
    var dir = document.getElementById("directivos");
    var esp = document.getElementById("especialidades")
    var nov = document.getElementById("novedades")
    dir.style.display="flex";
    nov.style.display="none";
    esp.style.display="none"
}

function show_especialidades(){
    var dir = document.getElementById("directivos");
    var esp = document.getElementById("especialidades")
    var nov = document.getElementById("novedades")
    dir.style.display="none";
    nov.style.display="none";
    esp.style.display="flex"
}

function show_novedades(){
    var dir = document.getElementById("directivos");
    var esp = document.getElementById("especialidades")
    var nov = document.getElementById("novedades")
    dir.style.display="none";
    nov.style.display="flex";
    esp.style.display="none"
}

function show_create_d(){
    var del = document.getElementById("delete_d");
    del.style.display = "none"; 

}

function show_delete_d() {
    var del = document.getElementById("delete_d");
    del.style.display = "flex"; 
    
}

function show_update_d(){
    var del = document.getElementById("delete_d");
    del.style.display = "none"; 
}
