<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  .btn{
  
    width: 300px;
    height:20px;
    background-color: #BC4040;
    color: #ffffff;
    border-radius: 6px;

  }
  .tabla{
    position:center;
    top:8em;
  }
  #sec{
  background: #4BA2EF;
    
  width: 300px;
  height:20px;
  background-color: #205da1;
  color: #ffffff;
  border-radius: 6px;
  font-size:90%;
  text-align: center;
}
.panel{
  color: black;

}
</style>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body >
<a class="panel" href="<?php echo constant('URL'); ?>principal"  type="submit" id="submit" value="Registrar Usuario"> <p >Ir a Panel</p> </a>
  <!-- <?php
   $ruta="imagen/1.jpeg";
   ?>
   <img style="windth:1565px;height: 400px;"; src="<?php echo $ruta; ?>"> -->
    
    <?php require 'views/header.php'; ?>
  
    <div id="nav">
    <center>
    <table class="tabla" style="text-align:center;">
        <tr>
   
        <th>
        <div id="aside">
  

<form action="<?php echo constant('URL'); ?>main/login"  method="POST">
<br>
<label form="matricula"></label>
<input type="text" name="matricula" id="" placeholder="Correo Electronico"  required ></p>
<br>
<label form="nombre"></label>
<input type="password" name="nombre" placeholder="Contraseña" id=""  required></p>
<br>
<p style="font-size:85%;"> ¿Olvidaste la contraseña?
<br>  

</br>
<button class="btn"> 
    <a href="<?php echo constant('URL'); ?>principal"  type="submit" id="submit" value="Registrar Usuario"> <p >Iniciar Sesion</p> </a>
    </button>
    <center> 
 <br>
    <section id=sec>  
            <a  href="<?php echo constant('URL'); ?>nuevo"> <b >Registrate</b> </a> 
            </section>
            </center>
 </div>
</th>
<th>
       <div text-aling="center" style="color:white">Bienvenido </div>
       <div id="section">
        <div id="text" style="font-size:80%;" > Ingresa y comparte tus proyectos e investigaciones, encuentra 
       informaciòn relevada para realizar tus actividades, toma los 
       pequeños cursos para retroalimentar tus conocimiento,
       Visualiza los archivos alojados en el sistema</div>
     </div>
        </th>
        </div>
</tr>
</table>
 </center>
   <br>
.
</br>
<br>
.
</br>
<br>
.
</br>

    <?php require 'views/footer.php'; ?>
</body>
</html>