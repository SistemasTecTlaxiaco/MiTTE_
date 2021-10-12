<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
  <script src="<?php echo constant('URL');?>bootstrapd/js/bootstrap.min.js"></script>  
  <style>
    .bg{
      background-image: url(<?php echo constant('URL');?>Fondo.jpeg);
      background-position: center center;
    }
  </style>
</head>

<body> 
  <?php require 'views/header.php';?>
  <br>
  <div class="container w-75 bg-secondary mt-5 rounded shadow">
    <div class="row">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
      <div class="col bg-white p-5 rounded-end">      
      <form action="<?php echo constant('URL'); ?>/login/authenticate" enctype="multipart/form-data" method="POST">
        <div class="mb-4">
          <label for="email" class="form-label" required>Correo Electronico</label>
          <input type="email" class="form-control" value="jaci" name="email">
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-danger">Iniciar Sesion</button>
        </div>
        <div class="my-3">
        <span>No tienes cuenta? <a href="#">Registrate</a></span><br>
        <span><a href="#">Recuperar contraseña</a></span><br>
        </div>
      </form>
      </div>
      </div>
      </div>
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/popper.min.js"></script>
      <br>      
      <?php require 'views/footer.php'; ?>   
</body>
</html>