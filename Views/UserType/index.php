<?php headerAdmin($data)?>
<div class="backgroun">

    
        <div class="conteiner">
            
            <section class="portada">
    
                <div class="backportada">
                    
                </div>
            </section>
        </div>
        
        <span class="spaan"> TECNOAGRO </span>
        <div class="bluuur"></div>
    </div>
    <section class="floatt">
        <div class="backfloat"></div>
        <h1>Elige que tipo de usuario quieres ser </h1>
        <h2>Puedes escoger el tipo de usuario para iniciar session y usar las herramientas predeterminada</h2>
        <a href="#" id="jss"><div class="box1" id="box1">
            <img src="<?php echo IMG ?>/box1.jpg" alt="">
            <h3 class="h33">VETERINARIO</h3>
        </div></a>
        
        <a href="#"id="jss2"><div class="box2" id="box2">
            <img src="<?php echo IMG ?>/box2.jpg" alt="">
            <h3>TECNICO GANADERO</h3>
        </div></a>
        
        <a href="#" id="jss3"><div class="box3" id="box3">
            <img src="<?php echo IMG ?>/box3.png" alt="">
            <h3 class="h34">GANADERO</h3>
        </div></a>
        
        <a href="#" id="jss4"><div class="box4" id="box4">
            <img src="<?php echo IMG ?>/box4.png" alt="">
            <h3 class="h33">VETERINARIO</h3>
        </div></a>
        <div class="clear"></div>
        <input type="submit" onclick="window.location='<?= base_url ?>/dashboard'">
    </section>
    
<?php footerAdmin($data)?>