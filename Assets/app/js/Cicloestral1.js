
/*ciclo estral*/

let ESTRO=24;
let METAESTRO=96;
let DIESTRO=456;
let PROESTRO=504;
let dia1,mes1,anio1,hora1,ES,ME,DIE,PRO,aux,AE,HE,DE,MESE,HM,DM,MESM,AM,HD,DD,MESD,AD,HP,DP,MESP,AP;
//  hora1 = prompt("¿Hora de inseminacion?");
//  dia1 = prompt("¿Que dia se insemino?");
//  mes1 = prompt("¿Que mes se insemino?");
//  anio1 = prompt("¿Que año se insemino?");
function enviarAlerta(){
let hora1 = document.getElementsByName('hora')[0].value;
let dia1 = document.getElementsByName('dia')[0].value;
let mes1 = document.getElementsByName('mes')[0].value;
let anio1 = document.getElementsByName('anio')[0].value;

let mesestotales=new Date(anio1, mes1, 0).getDate(); ;
ES=(parseInt(hora1)+ESTRO);
ME=(parseInt(hora1)+METAESTRO);
DIE=(parseInt(hora1)+DIESTRO);
PRO=(parseInt(hora1)+PROESTRO);
// ESTRO
if(parseInt(hora1)<=24){
if(parseInt(dia1)<=mesestotales){
if(parseInt(mes1)<=12){

if(ES>24){//calculo dias estro
aux=ES/24;
aux=Math.round(aux);
HE=ES-24;
DE=parseInt(dia1)+aux;
}else{
HE=ES;
DE=parseInt(dia1);
}
aux=0;
if (DE>mesestotales){// calculo mes estro
aux=DE/30;
aux=Math.round(aux);
MESE=(parseInt(mes1)+aux);
DE=DE-30;
}else{
MESE=parseInt(mes1);
}

aux=0;
if (MESE>12){// calculo año estro
aux=MESE/12;
aux=Math.round(aux);
AE=parseInt(anio1)+aux;
MESE=MESE-12;
}else{
AE=parseInt(anio1);
}
//METAESTRO

if(ME>24){//calculo dias metaestro
aux=ME/24;
aux=Math.round(aux);
HM=ME-96;
DM=parseInt(dia1)+aux;
}else{
HM=ME;
DM=parseInt(dia1);
}
aux=0;
if (DM>mesestotales){// calculo mes metaestro
aux=DM/30;
aux=Math.round(aux);
MESM=parseInt(mes1)+aux;
DM=DM-30;
}else{
MESM=parseInt(mes1);
}

aux=0;
if (MESM>mesestotales){// calculo año metaestro
aux=MESM/12;
aux=Math.round(aux);
AM=parseInt(anio1)+aux;
MESM=MESM-12;
}else{
AM=parseInt(anio1); 
}
//DIESTRO
if(DIE>24){//calculo dias diestro
aux=DIE/24;
aux=Math.round(aux);
HD=DIE-456;
DD=parseInt(dia1)+aux;
}else{
HD=DIE;
DD=parseInt(dia1);
}
aux=0;
if (DD>mesestotales){// calculo mes diestro
aux=DD/30;
aux=Math.round(aux);
MESD=parseInt(mes1)+aux;
DD=DD-30;
}else{
MESD=parseInt(mes1);
}

aux=0;
if (MESD>12){// calculo año diestro
aux=MESD/12;
aux=Math.round(aux);
AD=parseInt(anio1)+aux;
MESD=MESD-12;
}else{
AD=parseInt(anio1);
}
//PROESTRO

if(PRO>24){//calculo dias diestro
aux=PRO/24;
aux=Math.round(aux);
HP=PRO-504;
DP=parseInt(dia1)+aux;
}else{
HP=PRO;
DP=parseInt(dia1);
}
aux=0;
if (DP>mesestotales){// calculo mes diestro
aux=DP/30;
aux=Math.round(aux);
MESP=parseInt(mes1)+aux;
DP=DP-30;
}else{
MESP=parseInt(mes1);
}

aux=0;
if (MESP>12){// calculo año diestro
aux=MESP/12;
aux=Math.round(aux);
AP=parseInt(anio1)+aux;
MESP=MESP-12;
}else{
AP=parseInt(anio1);
}
// document.write("<h1> Hora y Fecha del Estro "+HE+":00   "+DE+"/"+MESE+"/"+AE+" </h1><br>");
// document.write("<h1> Hora y Fecha del Proestro "+HM+":00   "+DM+"/"+MESM+"/"+AM+" </h1><br>");
// document.write("<h1> Hora y Fecha del Metadiestro "+HD+":00   "+DD+"/"+MESD+"/"+AD+" </h1><br>");
// document.write("<h1> Hora y Fecha del Diestro "+HP+":00   "+DP+"/"+MESP+"/"+AP+" </h1><br>");
var newt = document.createElement("div");
var newt2 = document.createElement("div");
var newt3 = document.createElement("div");
var newt4 = document.createElement("div");
newt.style.cssText='border:none;padding:12px;width:350px;margin:12px 0 12px 0;position: relative;top: -1455px; left: 50%;z-index:10000;font-family: Avenir Book, sans-serif;font-size: 16px;font-weight: 700;' ; 
newt2.style.cssText='border:none;padding:12px;width:350px;margin:12px 0 12px 0;position: relative;top: -1455px; left: 50%;z-index:10000;font-family: Avenir Book, sans-serif;font-size: 16px;font-weight: 700;';       1
newt3.style.cssText='border:none;padding:12px;width:350px;margin:12px 0 12px 0;position: relative;top: -1455px; left: 50%;z-index:10000;font-family: Avenir Book, sans-serif;font-size: 16px;font-weight: 700;';       
newt4.style.cssText='border:none;padding:12px;width:350px;margin:12px 0 12px 0;position: relative;top: -1455px; left: 50%;z-index:10000;font-family: Avenir Book, sans-serif;font-size: 16px;font-weight: 700;';                       
var t= document.createTextNode("Hora y Fecha del Estro "+HE+":00   "+DE+"/"+MESE+"/"+AE+" ");  
var t2= document.createTextNode(" Hora y Fecha del Proestro "+HM+":00   "+DM+"/"+MESM+"/"+AM+" ");  
var t3= document.createTextNode(" Hora y Fecha del Metadiestro "+HD+":00   "+DD+"/"+MESD+"/"+AD+" ");  
var t4= document.createTextNode(" Hora y Fecha del Diestro "+HP+":00   "+DP+"/"+MESP+"/"+AP+" ");  
newt.appendChild(t); 
newt2.appendChild(t2); 
newt3.appendChild(t3); 
newt4.appendChild(t4); 
document.getElementById("cont5").appendChild(newt); 
document.getElementById("cont5").appendChild(newt2); 
document.getElementById("cont5").appendChild(newt3); 
document.getElementById("cont5").appendChild(newt4); 
}else{

document.write("<h1> Ingrese un mes valido entre 1 y 12 </h1><br>");
}

}else{

document.write("<h1> Ingrese un dia valido entre 1 y "+mesestotales +"</h1><br>");
}

}else{

document.write("<h1> Ingrese una hora valida entre 00:00 y 24:00 </h1><br>");
}
}
