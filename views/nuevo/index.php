
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  .btn{
  
  width: 200px;
  height:20px;
  background-color: #BC4040;
  color: #ffffff;
  border-radius: 6px;
  font-size:60%

}
#sec{
  background: #4BA2EF;
    
  width: 200px;
  height:20px;
  background-color: #205da1;
  color: #ffffff;
  border-radius: 6px;
  font-size:60%;
  text-align: center;
}

body{
    background: #9E9E9E;
    
    font-family: "Soberana", "Arial";
    font-size: 2em;
}
  .tabla{
    position:center;
    top:8em;
  }
  header{
  background: #3C4D5F;
    max-width: 1390px;
    min-height: 100px;
    text-align: left;
    vertical-align: top;
    padding: 5px;
   
}
footer{
  background: #3C4D5F;
  max-width: 1385px;
    min-height: 100px;
    padding: 0.25em;
    text-align: center;
}

</style>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body >

   <header >
 

           
        <img  style="width:200px;height:100px;"  src="imagen/tec.svg">
   </header>

    <div id="nav">
      <br>
    <center>
    <table class="tabla" style="text-align:center;">
        <tr>
   
        <th>
        <p style="">     

        <div  class= "center" text-aling="center"style="font-size:70%;"></div>
        <div text-aling="center"style="font-size:70%;">Registro de Usuario 
<form style="font-size:100%;" action="http://localhost/Proyecto-mytec/nuevo/registrarAlumno"  method="POST">


                <slavel form="nombre"></lavel><br>
                <input type="text" name="nombre" id="" placeholder="Nombre"  />
            <br>
                <lavel form="apellido"></lavel><br>
                <input type="text" name="apellido" id="" placeholder="Apellido"  />
             <br>
                <lavel form="telefono"></lavel><br>
                    <input type="text" name="telefono" id="" placeholder="Telefono" >
          <br>
                <lavel form="email"></lavel><br>
                <input type="email" name="email" id="" placeholder="Correo Electronico"  />
           <br>
                <lavel form="pass"></lavel><br>
                <input type="password" name="pass" id="" placeholder="Contraseña"  />
            </p>
  
            <button class="btn" type="submit" id="submit" value="Registrar Usuario"> Registrar Usuario</p> </a>
            </button>   
            <br>
             </br>
            <section id=sec>  
            <a  href="http://localhost/Proyecto-mytec/main"> <b >Log in</b> </a> 
            </section>


 
</th>

</tr>
</table>
 </center>
   <br>
.
</br>

    <footer>

    </footer>
</body>
</html>