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
  #nav{
    background-color: #fcfcfc;
    width: 700px;
    height:300px;
    text-align:center;
    margin: 0 auto;
    padding: 20px 0;
}
</style>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/registro.css">
</head>
<body >

  <!-- <?php
   $ruta="imagen/1.jpeg";
   ?>
   <img style="windth:1565px;height: 400px;"; src="<?php echo $ruta; ?>"> -->
    
    <?php require 'views/header.php'; ?>

    <div id="nav">
      <br>
    <center>
    <table class="tabla" style="text-align:center;">
        <tr>
   
        <th>
      
<?php echo $this->mensaje;?>

<form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno"  method="POST">

<label form="registrar">Registro de Usuario</label>

<p>
                <slavel form="nombre"></lavel><br>
                <input type="text" name="nombre" id="" placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/>
            </p>
            <p>
                <lavel form="apellido"></lavel><br>
                <input type="text" name="apellido" id="" placeholder="Apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
            </p>
            <p>
                <lavel form="telefono"></lavel><br>
                    <input type="text" name="telefono" id="" placeholder="Telefono" required>
            </p>
            <p>
                <lavel form="email"></lavel><br>
                <input type="email" name="email" id="" placeholder="Correo Electronico" pattern="^[a-zA-Z0-9.!#$%&’+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$" required/>
            </p>
            <p>
                <lavel form="password"></lavel><br>
                <input type="password" name="pass" id="" placeholder="Contraseña"  required/>
            </p>
</br>     
  <input class="btn" type="submit"  value="Iniciar Sesion" > 
</form>


 
</th>

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