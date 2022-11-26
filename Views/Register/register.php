<!doctype html>
<html lang="<?= SITE_LANG ?>">

<head> <link rel="shortcut icon" href="https://trello.com/1/cards/637311aad13bfd00b4a5f90c/attachments/63747c1af7e44803278219e1/download/Recurso_5-8.png">
   
  <meta charset="<?= SITE_CHARSET ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= SITE_DESC ?>">
  <meta name="author" content="GSF curso">
  <meta name="generator" content="<?= SITE_VERSION ?>">
  <title><?= SITE_NAME ?></title>

  <!-- Bootstrap -->
  <link href="<?= CSS ?>/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= FONTS ?>/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?= CSS ?>/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo PLUGINS ?>/noty/noty.css">
  
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>


<body>
    <div class="background">

        <div class="conteiner">

            <img src="<?php echo IMG ?>/inicio.png" alt="" id="imgss">
            
            <h1 class="saludo">TECNOAGRO TE DA LA BIENVENIDA</h1>
            
            <div style="clear:both;"></div>
            <h5 id="disfruta">Disfruta de nuestra comunidad donde podrás 
compartir y adquirir información a tu gusto</h5>
            <h3 id="in">Inicio de sesión</h3>
            
            <h3 id="ir">Registrarse</h3>
            <form method="POST" class="inicio_de_sesion" id="login"  novalidate>
                <input type="email" required class="email" name="email" placeholder="correo">
                <input type="password" required class="password" name="password" placeholder="contraseña">
                
                <button id="cambio"><span>¿no tienes una cuenta? <b>Registrate</b></span></button>
                <button class="enviar">
                      <span>Iniciar</span><svg id="login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 29.016 29.016">
                        <g id="Grupo_5" data-name="Grupo 5">
                          <g id="Grupo_4" data-name="Grupo 4">
                            <path id="Trazado_10" data-name="Trazado 10" d="M187.592,0H173.084a2.42,2.42,0,0,0-2.418,2.418V6.649a.6.6,0,1,0,1.209,0V2.418a1.211,1.211,0,0,1,1.209-1.209h14.508A1.211,1.211,0,0,1,188.8,2.418V26.6a1.211,1.211,0,0,1-1.209,1.209H173.084a1.211,1.211,0,0,1-1.209-1.209V22.366a.6.6,0,1,0-1.209,0V26.6a2.42,2.42,0,0,0,2.418,2.418h14.508A2.42,2.42,0,0,0,190.01,26.6V2.418A2.42,2.42,0,0,0,187.592,0Z" transform="translate(-160.994)" fill="#90ff5a"/>
                            <path id="Trazado_11" data-name="Trazado 11" d="M13.495,141.46a.6.6,0,0,0,.817.891l7.254-6.649a.6.6,0,0,0,0-.891l-7.254-6.649a.6.6,0,1,0-.817.891l6.109,5.6H.6a.6.6,0,1,0,0,1.209h19Z" transform="translate(0 -120.749)" fill="#90ff5a"/>
                          </g>
                        </g>
                      </svg>
                      
                  </button>
                <button class="face btn btn-1" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="28" height="28"
                    viewBox="0 0 48 48"
                    style=" fill:#000000;"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path></svg>
                    <span>Registro con Faceboock</span> </button>
                <button class="google btn btn-1" > <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="28" height="28"
                    viewBox="0 0 48 48"
                    style=" fill:#000000;"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path></svg>
                     <span>Registro con Google</span> </button>
               
            </form>
            <form  id="formRegister" method="POST" class="inicio_de_sesion"  >
                <input type="text" required class="email" id="nombre" name="nombre" placeholder="nombre">
                <input type="email" required class="email" id="email" name="email" placeholder="correo">
                <input type="password" required class="password" id="password" name="password" placeholder="contraseña">
                <input type="password" required class="email" id="rep_password" name="rep_password" placeholder="Repita su contraseña">
                <button id="cambio2"><span>¿Ya tienes una cuenta? <b>Inicia sesion</b> </span></button>
                <button onclick="save();" class="enviar" type="submit">
                     <span>Registrarse</span>
                     <svg id="login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 29.016 29.016">
                        <g id="Grupo_5" data-name="Grupo 5">
                          <g id="Grupo_4" data-name="Grupo 4">
                            <path id="Trazado_10" data-name="Trazado 10" d="M187.592,0H173.084a2.42,2.42,0,0,0-2.418,2.418V6.649a.6.6,0,1,0,1.209,0V2.418a1.211,1.211,0,0,1,1.209-1.209h14.508A1.211,1.211,0,0,1,188.8,2.418V26.6a1.211,1.211,0,0,1-1.209,1.209H173.084a1.211,1.211,0,0,1-1.209-1.209V22.366a.6.6,0,1,0-1.209,0V26.6a2.42,2.42,0,0,0,2.418,2.418h14.508A2.42,2.42,0,0,0,190.01,26.6V2.418A2.42,2.42,0,0,0,187.592,0Z" transform="translate(-160.994)" fill="#ff5a5a"/>
                            <path id="Trazado_11" data-name="Trazado 11" d="M13.495,141.46a.6.6,0,0,0,.817.891l7.254-6.649a.6.6,0,0,0,0-.891l-7.254-6.649a.6.6,0,1,0-.817.891l6.109,5.6H.6a.6.6,0,1,0,0,1.209h19Z" transform="translate(0 -120.749)" fill="#ff5a5a"/>
                          </g>
                        </g>
                      </svg>
                      
                  </button>
                <button class="google btn btn-1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="28" height="28"
                    viewBox="0 0 48 48"
                    style=" fill:#000000;"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path></svg>
                    <span>Registro con Google</span> </button>
                    <button class="face btn btn-1" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="28" height="28"
                      viewBox="0 0 48 48"
                      style=" fill:#000000;"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path></svg>
                      <span>Registro con Faceboock</span> </button>
            </form>
            
            


        </div>

    </div>
  <script>
    const base_url = "<?php echo base_url; ?>";
  </script>
    <script src="<?= ASSETS ?>/app/js/js2.js"></script>
  <script src="<?= ASSETS ?>/app/js/<?= $data['function_js']; ?>"></script>
  <script src="<?= ASSETS ?>/app/js/Login.js"></script>
  <script src="<?= PLUGINS ?>/noty/noty.min.js"></script>
</body>
</html>
