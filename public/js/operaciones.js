//FUNCIONES SOBRE EL COLOR DE LA PESTAÑA A DAR EN EL MENU DE NAVEGACION

//var identificador = null;
document.getElementById("menu_navigation").style.display = 'none';

function vermas(){
    /*identificador = document.getElementsByName("huerto_id")[0].value;
    document.getElementsByName("idd").value = identificador;
    variable_id=identificador;
    idde=identificador;*/
    //alert("id del huerto: " + identificador+" el id en la variable idde: "+idde);
}

function show_nav(){
    document.getElementById("menu_navigation").style.display = '';
}

function regresar(){
    document.getElementById("menu_navigation").style.display = 'none';
    //identificador = null;
}

function info(){
    //active1
    document.getElementById("active1").style.borderBottom="2px solid #16a34a";
    document.getElementById("active1").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active1").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}

function feno(){
    //active2
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #16a34a";
    document.getElementById("active2").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active2").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}

function produ(){
    //active3
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #16a34a";
    document.getElementById("active3").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active3").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}
function workd(){
    //active4
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #16a34a";
    document.getElementById("active4").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active4").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}
function activi(){
    //active5
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #16a34a";
    document.getElementById("active5").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active5").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}
function foto(){
    //active6
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #16a34a";
    document.getElementById("active6").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active6").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active7").style.borderBottom="2px solid #f3f4f6";
}
function reco(){
    //active7
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active5").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active6").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active7").style.borderBottom="2px solid #16a34a";
    document.getElementById("active7").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active7").style.borderRight="1px solid #c5c7cc";
}

//PARTE DEL CALENDARIO drow
//document.getElementById('contenido_dentro').style.display = 'none';
function item_nav(){
    document.getElementById("contenido_dentro").style.display = 'none';
}
function item_nav_show(){
    document.getElementById("contenido_dentro").style.display = '';
}
