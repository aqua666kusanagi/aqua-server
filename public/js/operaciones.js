/*document.querySelector('create.blade.php').onclick=function (){

};
function convertidor(){
    let area;
    let compara = false;
    let densidad=new Array();

}*/
//FUNCIONES SOBRE EL COLOR DE LA PESTAÑA A DAR EN EL MENU DE NAVEGACION

var identificador = null;
document.getElementById("menu_navigation").style.display = 'none';
function vermas(){
    document.getElementById("menu_navigation").style.display = '';
    identificador = document.getElementsByName("huerto_id")[0].value;
    document.getElementsByName("idd").value = identificador;
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

