<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">   
    <title>Pagina principal MiTTE</title>
    <link rel="shortcut icon" href="<?php echo constant('URL');?>img/favicon.png" sizes="32x32" type="image/png">
    <link rel="shortcut icon" href="<?php echo constant('URL');?>img/favicon.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous"> 
<link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.css" crossorigin="anonymous"> 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .bg{
      background-image: url(<?php echo constant('URL');?>/img/dormir.jpg);
      background-repeat: no-repeat;
      background-size: 100%;   
      background-position: center center;         
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>   
  <?php require 'views/principal/header.php';?>
  <div>
  <section class="py-3 text-center container">
    <div class="row py-lg-5 bg-danger">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-white text-light">Bienvenido al apartado de Proyectos</h1>
        <p class="lead text-light">En este apartado encontraras una variedad de investigaciones y tesis hechas por estudiantes de posgrados universitarios (ingeniria y licenciatura)</p>        
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4  g-3">
        <div class="col">
          <div class="card shadow-sm">   
             <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479.44 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\aplicacion con alojamiento de archivos en google drive\aplicacion con alojamiento de archivos en google drive.pdf"><title>App de alojamiento en la nube con google dirve.pdf</title><image width="1000" height="420" transform="scale(0.48 0.61)" xlink:href="<?php echo constant('URL'); ?>img/aplicacion con alojamiento de archivos wwn google drive.jpg"/></a></svg>
             <div class="card-body">
            <h5 class="card-title" style="text-align: center;">App de alojamiento con google dirve</h5>
              <p class="card-text">Google Drive es una herramienta de google, que se puede utilizar como una alternativa para realizar trabajos colaborativos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Jaciel Garcia Santiago</small>
                </div>
                <small class="text-muted"> 5hr</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474 253" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\aplicacion interactiva con Ionic angular\aplicacion interactiva con Ionic angular.pdf"><title>aplicacion interactiva con Ionic angular.pdf</title><image width="1280" height="960" transform="scale(0.37 0.27)" xlink:href="<?php echo constant('URL'); ?>img/aplicacion interactiva con Ionic angular.jpg"/></a></svg>          
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Aplicacion interactiva con Ionic angular</h5>
              <p class="card-text"> ionic es un framework que nos permite tomar nuestro conocimiento de Angular y crear aplicaciones multiplataforma que pueden correr en Android, IOS, convertirse en una PWA o crear una aplicación web.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: David Juan Feria Ortiz</small>
                </div>
                <small class="text-muted">15 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" href= "<?php echo constant('URL'); ?>img/c.svg"></img>
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\brazo robotico con arduino\brazo robotico con arduino.pdf"><title>brazo robotico con arduino.pdf</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/brazon robotico con arduino.png"/></a></svg> 
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">brazo robotico con arduino</h5>
              <p class="card-text"> El arduino es una placa que tiene todos los elementos necesarios para conectar periféricos a las entradas y salidas de un microcontrolador.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Antonio Cruz Chavez</small>
                </div>
                <small class="text-muted">20 dias</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\aplicacion web gestor de informacion con laravel y vue\aplicacion web gestor de informacion con laravel y vue.pdf"><title>aplicacion web gestor de informacion con laravel y vue.pdf</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/aplicacion web gedtor de informacion con laravel y vue.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">aplicacion web gestor con laravel y vue</h5>
              <p class="card-text"> Es un marco de trabajo o Framework gratuito (código abierto) que te facilita el desarrollo de aplicaciones con el lenguaje PHP.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Marcos Jonathan</small>
                </div>
                <small class="text-muted">30 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\sistema detector de humo con arduino\sistema detector de humo con arduino.pdf"><title>sistema detector de humo con arduino.pdf</title><image width="1280" height="720" transform="scale(0.37 0.35)" xlink:href="<?php echo constant('URL'); ?>img/sistema detector de humo con arduino.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">sistema detector de humo con arduino</h5>
              <p class="card-text">Es primordial, que toda empresa cuente con medidas de seguridad, en este caso arduino nos permite realizar proyectos que equiparan a dispositivos profecionales.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Maria Hernandez Zabedra</small>
                </div>
                <small class="text-muted">30 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL'); ?>uploads\file\reloj digital con procesador PIC y java\reloj digital con procesador PIC y java.pdf"><title>reloj digital con procesador PIC y java.pdf</title><image width="700" height="368" transform="scale(0.68 0.69)" xlink:href="<?php echo constant('URL'); ?>img/reloj.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">reloj digital con procesador PIC y java</h5>
              <p class="card-text"> Un PIC es un circuito integrado programable, el cual contiene todos los componentes para poder realizar y controlar una tarea, por lo que se denomina como un microcontrolador.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Francisco Mejia Jose</small>
                </div>
                <small class="text-muted">40 dias</small>
              </div>
            </div>
          </div>
        </div>
        <?php
                foreach($this->files as $file){                                   
                    $archivo=new Archivo();
                    $archivo=$file;  
                    if($archivo->tipo=="proyecto"||$archivo->tipo=="proyectos"||$archivo->tipo=="Proyecto" ||$archivo->tipo=="Proyectos"){                
     ?>
     <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo $this->archivo->ruta;?>"><title><?php echo $archivo->nombre;?></title><image width="870" height="522" transform="scale(0.68 0.69)" xlink:href="<?php echo constant('URL'); ?>img/investigaciones.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;"><?php echo $archivo->titulo;?></h5>
              <p class="card-text"><?php echo $archivo->descripcion;?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"><?php echo $archivo->autor;?></small>
                </div>
                <small class="text-muted"><?php echo $archivo->fecha;?></small>
              </div>
            </div>
          </div>
        </div>
      <?php }}
    ?>
     

      </div>
    </div>
  </div>
</div>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>
