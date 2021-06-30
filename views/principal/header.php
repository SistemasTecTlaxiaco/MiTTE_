<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
    <!--link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/main.css"-->
    <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrap/dist/css/bootstrap.css">          
    <link href="/public/css/sidebars.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="navbar">
        <div class="container-fluid" style="right: auto; left: 0;">
            <a class="navbar-brand" href="#">
                <img src="<?php echo constant('URL');?>/img/MiTTE3.svg" height="30" width="50">
            </a>            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo constant('URL');?>principal">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>investigaciones">Investigaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>posgrados">Posgrados</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>nuevoArchivo">Subir Archivo</a></li>         
                </ul>               
            </div>
            <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-toggle="collapse" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo constant('URL');?>/img/mensaje.svg" alt="" width="32" height="32" class="rounded-circle me-2">        
      </a>
      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-white text-small shadow" style="right: 0; left: auto;" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Usted no tiene notificaciones pentientes</a></li>
        <li><a class="dropdown-item" href="#"></a></li>
        <li><a class="dropdown-item" href="#"></a></li>        
      </ul>
    </div>
            <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-toggle="collapse" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo constant('URL');?>/img/noti.svg" alt="" width="32" height="32" class="rounded-circle me-2">        
      </a>
      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-white text-small shadow" style="right: 0; left: auto;" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Usted no tiene notificaciones pentientes</a></li>
        <li><a class="dropdown-item" href="#"></a></li>
        <li><a class="dropdown-item" href="#"></a></li>        
      </ul>
    </div>
            <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-toggle="collapse" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo $this->datos->foto?>" alt="" width="32" height="32" class="rounded-circle me-2">        
      </a>
      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-white text-small shadow" style="right: 0; left: auto;" role="menu" aria-labelledby="dropdownUser1">
      <li class="">&nbsp Bienvenido <a class="fw-bold text-dark "><?php echo $this->nomUser;?><a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="<?php echo constant('URL');?>cuenta">Perfil</a></li>
        <li><a class="dropdown-item" href="<?php echo constant('URL');?>misArchivos">Mis archivos</a></li>
        <li><a class="dropdown-item" href="#">Configuracion</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="<?php echo constant('URL');?>/principal/closeSession">Cerrar sesión</a></li>
      </ul>
    </div>  
        </div>
    </nav>
    <script src="<?php echo constant('URL'); ?>js/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo constant('URL'); ?>js/bootstrap.min.js" crossorigin="anonymous"></script> 
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <script src="<?php echo constant('URL');?>/public/js/sidebars.js"></script>
</body>
</html>