<?php
// Incluir archivo de configuración
require_once __DIR__ . '/config.php';




// ============================================
// FUNCIONES UNIFICADAS QUE USAN CONFIG.PHP
// ============================================

/**
 * Carga Bootstrap CSS según la configuración (local u online)
 */
function linksBootstrapHeader(){
    if (RECURSOS_MODO === 'local') {
        ?>
<link href="<?php echo BOOTSTRAP_CSS_LOCAL; ?>" rel="stylesheet">
        <?php
    } else {
        ?>
<link href="<?php echo BOOTSTRAP_CSS_ONLINE; ?>" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <?php
    }
}

/**
 * Carga Bootstrap JS según la configuración (local u online)
 */
function linksBootstrapFooter(){
    if (RECURSOS_MODO === 'local') {
        ?>
<script src="<?php echo BOOTSTRAP_JS_LOCAL; ?>"></script>
        <?php
    } else {
        ?>
<script src="<?php echo BOOTSTRAP_JS_ONLINE; ?>" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php
    }
}

/**
 * Carga FontAwesome según la configuración (local u online)
 */
function linksFontAwesome(){
    if (RECURSOS_MODO === 'local') {
        ?>
<link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_LOCAL; ?>">
        <?php
    } else {
        ?>
<link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_ONLINE; ?>">
        <?php
    }
}

/**
 * Carga WordCloud2 según la configuración (local u online)
 */
function linksWordCloud2(){
    if (RECURSOS_MODO === 'local') {
        ?>
<script src="<?php echo WORDCLOUD2_JS_LOCAL; ?>"></script>
        <?php
    } else {
        ?>
<script src="<?php echo WORDCLOUD2_JS_ONLINE; ?>"></script>
        <?php
    }
}

// ============================================
// FUNCIONES LEGACY (mantenidas por compatibilidad)
// ============================================

/* USANDO BOOTSTRAP ONLINE - LEGACY */
function linksBootstrapOnline(){
    ?>
<link href="<?php echo BOOTSTRAP_CSS_ONLINE; ?>" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
}

function linkBootstrapFooterOnline(){
  ?>
<script src="<?php echo BOOTSTRAP_JS_ONLINE; ?>" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
<?php
}

function linksFontAwesomeOnline(){
  ?>
<link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_ONLINE; ?>">
  <?php
}

/* USANDO BOOTSTRAP LOCAL - LEGACY */
function linksBootstrapLocalHeader(){
    ?>
<link href="<?php echo BOOTSTRAP_CSS_LOCAL; ?>" rel="stylesheet">
    <?php
}

function linksBootstrapLocalFooter(){
    ?>
<script src="<?php echo BOOTSTRAP_JS_LOCAL; ?>"></script>
    <?php
}

function linksFontAwesomeLocal(){
    ?>
<link rel="stylesheet" href="<?php echo FONTAWESOME_CSS_LOCAL; ?>">
    <?php
}

function barra(){
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <?php
}

function barra2(){
?>
 <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Menú
   </button>
   <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="nosotros.php">Nosotros</a></li>
    <li><a class="dropdown-item" href="bachiller.php">Bachiller en Economía y Administración</a></li>
    <li><a class="dropdown-item" href="bioagro.php">Bachiller en Bioagroindustria</a></li>
    <li><a class="dropdown-item" href="informatica.php">Técnico en informática Profesional y Personal</a></li>
    <li><a class="dropdown-item" href="formulario.php">Orientatec</a></li>
    <li><a class="dropdown-item" href="#">Otros...</a></li>
  </ul>
 </div>
<?php
}



function alertaBootstrap($parametro){
    $variableHTML = "";
    $variableHTML = "<div class='alert alert-success m-3' role='alert'>
                        $parametro
                    </div>";
    return $variableHTML;
}


function menu(){
  ?>
   <div class="container">

  <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Menú
   </button>
   <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="nosotros.php">Nosotros</a></li>
    <li><a class="dropdown-item" href="bachiller.php">Bachiller en Economía y Administración</a></li>
    <li><a class="dropdown-item" href="bioagro.php">Bachiller en Bioagroindustria</a></li>
    <li><a class="dropdown-item" href="informatica.php">Técnico en informática Profesional y Personal</a></li>
    <li><a class="dropdown-item" href="formulario.php">Orientatec</a></li>
    <li><a class="dropdown-item" href="#">Otros...</a></li>
  </ul>
 </div>

 <?php
}

function menuNavbar($paginaActual){

  //echo $paginaActual;
  
  ?>



   <nav class="navbar navbar-expand-lg bg-body-tertiary"  > <!-- style="background-color: #1e7348;" -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $paginaActual=="inicio"?"active":"" ?>" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $paginaActual=="nosotros"?"active":"" ?>" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Especialidades
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?= $paginaActual=="eco"?"active":"" ?>" href="bachiller.php">Bachiller en Economía y Administración</a></li>
            <li><a class="dropdown-item <?= $paginaActual=="agro"?"active":"" ?>" href="bioagro.php">Bachiller en Bioagroindustria</a></li>
            <li><a class="dropdown-item <?= $paginaActual=="info"?"active":"" ?>" href="informatica.php">Técnico en informática Profesional y Personal</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $paginaActual=="orientacion"?"active":"" ?>" href="formulario.php">Consulta tu preferencia vocacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $paginaActual=="historial"?"active":"" ?>" href="respuestasgnrl.php">Historial de Orientatec</a>
        </li>
   
      </ul>
      <div class="ms-auto">
        <img src="img/logo d.png" height="50" alt="Logo" class="d-none d-lg-block">
      </div>
    </div>
  </div>
</nav>

 <?php
}

function piePaginaBootstrap(){
  ?>
 <?php linksFontAwesome(); ?>
 <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="background-color: #146941ff; color: white;">
   <div class="col-md-6 d-flex align-items-center">
     <span class="mb-3 mb-md-0 text-white">© 2025 OrientaTec - I.P.E.A.T.y M. N° 186 CAPITAN LUIS DARIO JOSE CASTAGNARI</span> 
   </div>
   <ul class="nav col-md-6 justify-content-end list-unstyled d-flex"> 
     <li class="ms-3">
       <a class="text-white" href="https://instagram.com/ipeatym186" target="_blank" aria-label="Instagram" style="font-size: 1.5rem;">
         <i class="fab fa-instagram"></i></a> ipeatym186
     </li>
     <li class="ms-3">
       <a class="text-white" href="tel:3584978840" aria-label="Teléfono" style="font-size: 1.5rem;">
         <i class="fas fa-phone"></i></a> 3584978840
     </li>
     <li class="ms-3">
       <a class="text-white" href="mailto:ipeayt186capitancastagnari@gmail.com" aria-label="Email" style="font-size: 1.5rem;">
         <i class="fas fa-envelope"></i></a> ipeayt186capitancastagnari@gmail.com
     </li>
   </ul>
 </footer>

 <?php
 linksBootstrapFooter();
}
?>