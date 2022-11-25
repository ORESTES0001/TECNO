<?php
headerAdmin($data);

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
<!-- Mis estilos -->
    <link href="<?= FONTS ?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= CSS ?>/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= CSS ?>/custom.min.css" rel="stylesheet">
    <!-- plugins -->

<?php if (Permisos::create()) : ?>
    <a href="<?= base_url ?>/usuarios/nuevo">Nuevo</a>
<?php endif ?>

<?php if (Permisos::updater()) : ?>
    <a href="<?= base_url ?>/usuarios/nuevo"><svg id="Icon_Pencil" data-name="Icon/Pencil" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
  <defs>
    <clipPath id="clip-path">
      <path id="Mask" d="M2.586,24.414l-2-2A1.987,1.987,0,0,1,0,21V2A2,2,0,0,1,2,0H6A2,2,0,0,1,8,2V21a1.987,1.987,0,0,1-.586,1.415l-2,2a2,2,0,0,1-2.829,0ZM2,21l2,2,2-2V6.429H2ZM6,4.429V2H2V4.429Z" transform="translate(20.678 3) rotate(45)"/>
    </clipPath>
  </defs>
  <g id="Icon_Pencil-2" data-name="Icon/Pencil">
    <path id="Grid" d="M0,0H30V30H0Z" fill="none"/>
    <path id="Mask-2" data-name="Mask" d="M2.586,24.414l-2-2A1.987,1.987,0,0,1,0,21V2A2,2,0,0,1,2,0H6A2,2,0,0,1,8,2V21a1.987,1.987,0,0,1-.586,1.415l-2,2a2,2,0,0,1-2.829,0ZM2,21l2,2,2-2V6.429H2ZM6,4.429V2H2V4.429Z" transform="translate(20.678 3) rotate(45)"/>
    <g id="Icon_Pencil-3" data-name="Icon/Pencil" clip-path="url(#clip-path)">
      <g id="Color">
        <path id="Icon_Fill_Accent" data-name="Icon/🖌 Fill/Accent" d="M0,0H30V30H0Z" fill="#0880ae"/>
      </g>
    </g>
  </g>
</svg>
</a>
<?php endif ?>

<?php if (Permisos::deleter()) : ?>
    <a href="<?= base_url ?>/usuarios/nuevo"><svg id="Icon_Cross" data-name="Icon/Cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
  <defs>
    <clipPath id="clip-path">
      <path id="Mask" d="M12.293,13.707,7,8.414,1.707,13.707A1,1,0,0,1,.293,12.293L5.586,7,.293,1.707A1,1,0,0,1,1.707.293L7,5.586,12.293.293a1,1,0,0,1,1.414,1.415L8.414,7l5.293,5.293a1,1,0,1,1-1.414,1.414Z" transform="translate(8 8)"/>
    </clipPath>
  </defs>
  <rect id="Icon_Cross_background" data-name="Icon/Cross background" width="30" height="30" fill="none"/>
  <g id="Icon_Cross-2" data-name="Icon/Cross">
    <path id="Grid" d="M0,0H30V30H0Z" fill="none"/>
    <path id="Mask-2" data-name="Mask" d="M12.293,13.707,7,8.414,1.707,13.707A1,1,0,0,1,.293,12.293L5.586,7,.293,1.707A1,1,0,0,1,1.707.293L7,5.586,12.293.293a1,1,0,0,1,1.414,1.415L8.414,7l5.293,5.293a1,1,0,1,1-1.414,1.414Z" transform="translate(8 8)"/>
    <g id="Icon_Cross-3" data-name="Icon/Cross" clip-path="url(#clip-path)">
      <g id="Color">
      </g>
    </g>
  </g>
</svg>
</a>
<?php endif ?>



<!-- tabla -->

        <div class="x_panel">
          <div class="x_content">
            <table id="tblUsuarios" class="display responsive nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Rol</th>
                  <th>Status</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>

          </div>
        </div>


<?php footerAdmin($data); ?>