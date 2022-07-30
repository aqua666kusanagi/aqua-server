//FUNCIONES SOBRE EL COLOR DE LA PESTAÑA A DAR EN EL MENU DE NAVEGACION

var identificador = null;
document.getElementById("menu_navigation").style.display = 'none';

function vermas(){
    identificador = document.getElementsByName("huerto_id")[0].value;
    document.getElementsByName("idd").value = identificador;
    variable_id=identificador;
    idde=identificador;
    //alert("id del huerto: " + identificador+" el id en la variable idde: "+idde);
}

function show_nav(){
    document.getElementById("menu_navigation").style.display = '';
}

function regresar(){
    document.getElementById("menu_navigation").style.display = 'none';
    identificador = null;
}

function info(){
    document.getElementById("active1").style.borderBottom="2px solid #16a34a";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
}

function feno1(){
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #16a34a";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
}

function produ(){
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #16a34a";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
}
function reco(){
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #16a34a";
}

