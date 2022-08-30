//FUNCIONES SOBRE EL COLOR DE LA PESTAÑA A DAR EN EL MENU DE NAVEGACION
document.getElementById("menu_navigation").style.display = 'none';

function show_nav(){
    document.getElementById("menu_navigation").style.display = '';
}

function regresar(){
    document.getElementById("menu_navigation").style.display = 'none';
}

function info(){
    //active1
    document.getElementById("active1").style.borderBottom="2px solid #16a34a";
    document.getElementById("active1").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active1").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
}

function calend(){
    //active2
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #16a34a";
    document.getElementById("active2").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active2").style.borderRight="1px solid #c5c7cc";
    document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
}

function reco(){
    //active7
    document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
    document.getElementById("active3").style.borderBottom="2px solid #16a34a";
    document.getElementById("active3").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("active3").style.borderRight="1px solid #c5c7cc";
}
//FUNCIONES PARA LA SEGUNDA NAVEGACION
function feno(){
    document.getElementById("nav1").style.borderBottom="2px solid #8cdeaa";
    document.getElementById("nav1").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("nav1").style.borderRight="1px solid #c5c7cc";
    document.getElementById("nav2").style.borderBottom="2px solid #ffffff";
    document.getElementById("nav2").style.borderBottom="2px solid #ffffff";
    /*document.getElementById("Fenofase").style.display='';
    document.getElementById("Actividad").style.display='none';
    document.getElementById("Produccion").style.display='none';*/
}
function activi(){
    document.getElementById("nav1").style.borderBottom="2px solid #ffffff";
    document.getElementById("nav2").style.borderBottom="2px solid #8cdeaa";
    document.getElementById("nav2").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("nav2").style.borderRight="1px solid #c5c7cc";
    document.getElementById("nav3").style.borderBottom="2px solid #ffffff";
    /*document.getElementById("Fenofase").style.display='none';
    document.getElementById("Actividad").style.display='';
    document.getElementById("Produccion").style.display='none';*/
}
function produ(){
    document.getElementById("nav1").style.borderBottom="2px solid #ffffff";
    document.getElementById("nav2").style.borderBottom="2px solid #ffffff";
    document.getElementById("nav3").style.borderBottom="2px solid #8cdeaa";
    document.getElementById("nav3").style.borderLeft="1px solid #c5c7cc";
    document.getElementById("nav3").style.borderRight="1px solid #c5c7cc";
    /*document.getElementById("Fenofase").style.display='none';
    document.getElementById("Actividad").style.display='none';
    document.getElementById("Produccion").style.display='';*/
}
