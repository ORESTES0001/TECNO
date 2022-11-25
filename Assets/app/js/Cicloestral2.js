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

        })
})

$(document).ready(function(){
    $("#perfil1").click(function(){

            document. getElementById('perfill').style.opacity ='0';
            document. getElementById('perfil').style.opacity ='1';
            document. getElementById('perfil').style.zIndex ='1';
            document. getElementById('perfil1').style.zIndex ='0';
            document. getElementById('perfil1').style.opacity ='0';

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