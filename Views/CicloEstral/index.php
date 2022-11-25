<?php headerAdmin($data)?>
<div class="conteiner">

 

<section class="headerr">
  <h1>TECNOAGRO</h1>
  <img src="<?php echo IMG ?>/Ciudad_de_Jinotega,_Nicaragua_desde_el_aire - copia.png" alt="">
</section>

<section class="conteinerfloat">
  <div class="floattt">

  </div>
      <h1> TECNOAGRO </h1>
      <h2>Ciclo Estral Calculadora</h2>
      <input type="button" name="atras" value=" Atras" id="Atras" onclick="">
      <h3>Ingrese los datos</h3>	
          <form class="form" action="ciclo.html" method="post">
          <input type="text" name="hora" placeholder="Hora">
          <input type="text" name="dia" placeholder="Dia">
          <input type="text" name="mes" placeholder="Mes">
          <input type="text" name="anio" placeholder="Año">
          <input type="button" name="enviar" value="Calcular" id="download" onclick="enviarAlerta();">
          </form>
          <div id="cont5"></div>
</section>
</div>
<?php footerAdmin($data)?>