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
    var upd = document.getElementById("update_d");
    var crt = document.getElementById("create_d");
    crt.style.display = "flex";
    del.style.display = "none"; 
    upd.style.display = "none"; 
}

function show_delete_d() {
    var del = document.getElementById("delete_d");
    var upd = document.getElementById("update_d");
    var crt = document.getElementById("create_d");
    del.style.display = "flex"; 
    crt.style.display = "none";
    upd.style.display = "none"; 
}

function show_update_d(){
    var del = document.getElementById("delete_d");
    var upd = document.getElementById("update_d");
    var crt = document.getElementById("create_d");
    crt.style.display = "none"; 
    del.style.display = "none"; 
    upd.style.display = "flex"; 
}





function show_insert_n(){
    var del = document.getElementById("delete_n");
    var upd = document.getElementById("update_n");
    var crt = document.getElementById("insert_n");
    crt.style.display = "flex";
    del.style.display = "none"; 
    upd.style.display = "none"; 
}

function show_delete_n() {
    var del = document.getElementById("delete_n");
    var upd = document.getElementById("update_n");
    var crt = document.getElementById("insert_n");
    del.style.display = "flex"; 
    crt.style.display = "none";
    upd.style.display = "none"; 
}

function show_update_n(){
    var del = document.getElementById("delete_n");
    var upd = document.getElementById("update_n");
    var crt = document.getElementById("insert_n");
    crt.style.display = "none"; 
    del.style.display = "none"; 
    upd.style.display = "flex"; 
}



function show_insert_e(){
    var del = document.getElementById("delete_e");
    var upd = document.getElementById("update_e");
    var crt = document.getElementById("insert_e");
    crt.style.display = "flex";
    del.style.display = "none"; 
    upd.style.display = "none"; 
}

function show_delete_e() {
    var del = document.getElementById("delete_e");
    var upd = document.getElementById("update_e");
    var crt = document.getElementById("insert_e");
    del.style.display = "flex"; 
    crt.style.display = "none";
    upd.style.display = "none"; 
}

function show_update_e(){
    var del = document.getElementById("delete_e");
    var upd = document.getElementById("update_e");
    var crt = document.getElementById("insert_e");
    crt.style.display = "none"; 
    del.style.display = "none"; 
    upd.style.display = "flex"; 
}



