$(document).ready(function(){
    var em = document.getElementById("herras");
    var  temp = window.getComputedStyle(em).getPropertyValue("opacity");
    $("#Menu").click(function(){
         if(temp == '0'){
            document. getElementById('herras').style.opacity ='1';
            document. getElementById('Menu1').style.opacity ='1';
            document. getElementById('Menu1').style.zIndex ='10';
            document. getElementById('Menu').style.zIndex ='0';
            
        }
        })
})
$(document).ready(function(){
    $("#Menu1").click(function(){

            document. getElementById('herras').style.opacity ='0';
            document. getElementById('Menu1').style.opacity ='0';
            document. getElementById('Menu1').style.zIndex ='0';
            document. getElementById('Menu').style.zIndex ='1';
            document. getElementById('Menu').style.opacity ='1';

        })
})

$(document).ready(function(){
    $("#perfil").click(function(){

            document. getElementById('perfill').style.opacity ='1';
            document. getElementById('perfil').style.opacity ='0';
            document. getElementById('perfil').style.zIndex ='0';
            document. getElementById('perfil1').style.zIndex ='1';
            document. getElementById('perfil1').style.opacity ='1';
            document. getElementById('perfill').style.height ='110px';
            document. getElementById('buscador1').style.top ='-185px';
            document. getElementById('buscador').style.opacity ='0';
        })
})

$(document).ready(function(){
    $("#perfil1").click(function(){

            document. getElementById('perfill').style.opacity ='0';
            document. getElementById('perfil').style.opacity ='1';
            document. getElementById('perfil').style.zIndex ='1';
            document. getElementById('perfil1').style.zIndex ='0';
            document. getElementById('perfil1').style.opacity ='0';
            document. getElementById('perfill').style.height ='10px';
            document. getElementById('buscador1').style.top ='-103px';
            document. getElementById('buscador').style.opacity ='1';

        })
})
$(document).ready(function(){
    $("#buscador").click(function(){

            document. getElementById('search1').style.opacity ='1';
            document. getElementById('buscador1').style.opacity ='1';
            document. getElementById('buscador1').style.zIndex ='1';
            document. getElementById('buscador').style.zIndex ='0';
            document. getElementById('buscador').style.opacity ='0';

        })
})
$(document).ready(function(){
    $("#buscador1").click(function(){

            document. getElementById('search1').style.opacity ='0';
            document. getElementById('buscador').style.opacity ='1';
            document. getElementById('buscador').style.zIndex ='1';
            document. getElementById('buscador1').style.zIndex ='0';
            document. getElementById('buscador1').style.opacity ='0';

        })
})
$(document).ready(function(){
    $("#WHATIS").click(function(){

            document. getElementById('WI').style.opacity ='1';
            document. getElementById('WI').style.zIndex ='1000';
            document. getElementById('OF').style.zIndex ='900';
            document. getElementById('OF').style.opacity ='0';
            document. getElementById('WHATIS').style.backgroundColor ='black';
            document. getElementById('OFFERS').style.backgroundColor ='white';
            document. getElementById('WHATIS').style.color ='white';
            document. getElementById('OFFERS').style.color ='black';
            

        })
})
$(document).ready(function(){
    $("#OFFERS").click(function(){

            document. getElementById('OF').style.opacity ='1';
            document. getElementById('OF').style.zIndex ='1000';
            document. getElementById('WI').style.zIndex ='900';
            document. getElementById('WI').style.opacity ='0';
            document. getElementById('OFFERS').style.backgroundColor ='black';
            document. getElementById('WHATIS').style.backgroundColor ='white';
            document. getElementById('WHATIS').style.color ='black';
            document. getElementById('OFFERS').style.color ='white';

        })
})