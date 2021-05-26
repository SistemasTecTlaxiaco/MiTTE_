<!DOCTYPE html>
<html lang="en">
<style type="text/css">
*{
    margin: 0;
    padding: 0; /espacio que hay entre un objeto y el texto/
}
/* 16=12pt=100%=1em*/
body{
    background: #FFFFFF ;
    color: #000000;
    font-family: "Soberana", "Arial";
    font-size: 2em;
}
h1{
    color: #f60;
    margin: 0.25em auto;
    text-align: center;
    /sombre/
    text-shadow: 5px 5px 10px rgba(255,255,255,0.9);
}
header{
  background: #3C4D5F;
    max-width: 1385px;
    min-height: 75px;
    padding: 0.25em;
    text-align: right;
}

footer#contenedor{
  background: #7B7B7B;
  max-width: 1385px;
    min-height: 100px;
    padding: 0.25em;
    text-align: center;
}

footer#principal{
  background: #9E9E9E;
  max-width: 1285px;
    min-height: 95px;
    padding: 0.5em;
    text-align: center;
}

section#contenedor{
    /backgronund: #FFF;/
    max-width: 1600px;
    min-height: 100px;
    padding: 0;
    text-align: left;
}
section#principal{
    background: #FFFFFFFF;
    display: inline-block;
    color: 00000;
    max-width: 1400px;
    min-height: 800px;
    padding: 0.25em;
    text-align: center;
    vertical-align: top;
    width: 87%;
}
aside{
    background: #3C4D5F;
    display: inline-block;
    max-width: 760px;
    min-height: 1008px;
    padding: 0.25em;
    text-align: center;
    vertical-align: top;
    
}
article{
    background: #011e30;
    border-radius: 0.5em;
    min-height: 140px;
    padding: 0.25em;
}

.boton{
   width: 150px;
    height:30px;
    background-color: #1BD1B1;
    color: #000000;
    border-radius: 6px;
    font-family: Arial, Helvetica, sans-serif;
}
.boton2{
   width: 128px;
    height:30px;
    background-color: #9E9E9E;
    color: #FFFFFFFF;
    text-align: left;
    
    font-family: Arial, Helvetica, sans-serif;
}

.cursos{
  border: 2px solid #cdcdcd;
  
}
.texto{
  color: #828282;
}

  }
 
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
    
</head>
<body>
    <header id=imagen>
     
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta3="imagen/insertar.jpeg";
        ?>
        <img  style="width:700px;height:65px;"  src="<?php echo $ruta3; ?>">
       
    </header>

    <section id="contenedor">

         <aside>
<ul>
 <li>
         <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta2="imagen/usuario.png";
        ?>

        <img  style="width:120px;height:120px;"  src="<?php echo $ruta2; ?>">
</li>
<br>
</br>
<li>
  <Table style="font-size:20%;">
  <tr>
        <th>
     
      

          <button 
           class="boton2"  style="background-color: #9E9E9E"  >  <?php
        $ruta7="imagen/inicio.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta7;?>">Pagina Principal
          </button>
         </th>       
  </tr>
  <tr>
         <th>
         <button class="boton2" style="background-color: #9E9E9E"  >
         <?php
        $ruta8="imagen/carpeta.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta8;?>">
         Archivos
          </button>
            
         </th>
</tr>
<tr>
         <th>
         <button class="boton2" style="background-color: #9E9E9E"  >
         <?php
        $ruta9="imagen/gorra.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta9;?>">Posgrados
          </button>   
        </th>
</tr>
 <tr>
        <th>
         <button class="boton2" style="background-color: #9E9E9E"  >
         <?php
        $ruta10="imagen/biblioteca.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta10;?>">Cursos
          </button>
            
        </th>
  </tr>
  <tr>
       <th>
         <button class="boton2" style="background-color: #9E9E9E"  >
         <?php
        $ruta11="imagen/historial.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta11;?>">Historial
          </button>
            
        </th>
  </tr>
  <tr>
       <th>
         <button class="boton2" style="background-color: #9E9E9E"  >
         <?php
        $ruta12="imagen/configuraciones.png";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta12;?>">Configuraciòn 
          </button>
        </th>
  </tr>
</Table>
      
</li>
</ul>    
          </aside>

          <section id="principal" >
          <br>
</br>
          <div id="text" style="font-size:80%;" >Introducciòn 
              </div>
        <br>
</br>
<div id="text" style="font-size:70%;" > MiTTE es un espacio de integraciòn de elementos y escenarios acadèicos 
              </div>
       
         <div id="text" style="font-size:70%;" >
              fuera del aula virtual en el cual podràs encontrar contenido de apoyo docente
             </div>
       
         <div id="text" style="font-size:70%;" >
              y estudiantil como tutoriales y cursos que permitiràn fortalecer tus 
             </div>
      
         <div id="text" style="font-size:70%;" > 
              conocimentos y ademàs te serviràn de ayuda en la realizaciòn de trabajos o
              proyectos educativos.</div>
      
         <div id="text" style="font-size:70%;" > 
  
              proyectos educativos.</div>

              <br>
<center>
<table  style="font-size:80%;">
      <tr>
           <td class="texto" > Archivos Recientes
          </td>
      </tr>
      <tr>
             <td class="cursos">
             <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta10="imagen/10.jpeg";
        ?>
        <img  style="width:380px;height:250px;"  src="<?php echo $ruta10; ?>">
             </td>
             <td class="cursos">
             <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta11="imagen/11.jpeg";
        ?>
        <img  style="width:380px;height:250px;"  src="<?php echo $ruta11; ?>">
             </td>
             <td class="cursos">
             <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta11="imagen/12.jpeg";
        ?>
        <img  style="width:380px;height:250px;"  src="<?php echo $ruta11; ?>">
             </td>
      </tr>

      <tr>
          <td class="cursos"> 
          <a class="texto"  style="font-size:80%;" > Java Script.pdf </a>
          <br>
          <a class="texto"  style="font-size:70%;">Subido por: Jaciel Santiago Garcia</a>
          </td>

          <td class="cursos"> 
          <a class="texto"  style="font-size:80%;">Investigacion de Frac..</a>
          <br>
          <a class="texto"  style="font-size:70%;">Subido por: David Juan Feria Ortiz</a>
          </td>

          <td class="cursos">
          <a class="texto"  style="font-size:80%;">Uso de cajas css.pdf</a>
          <br>
          <a class="texto"  style="font-size:70%;">Subido por: Antonio Cruz Chavez</a>
          </td>

      </tr>

</table>
</center>
<br>
<center>
<table>
<tr>
   <td >
   <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta12="imagen/aulavirtual.jpeg";
        ?>
        <img  style="width:1150px;height:250px;"  src="<?php echo $ruta12; ?>">
   </td>
</tr>
<tr>
   <td class="cursos">
   <center>
   <a class="texto" style="font-size:80%;">Visita el aula virtual</a>
   </center>
   </td>
</tr>
</table>
</center>

         </section>

 
   <footer id="contenedor">
      
        <footer id="principal">
      <center>
<table  style="font-size:50%;" >
  <tr>
        <th>
          <button class="boton"  style="background-color: #1BD1B1"  > Contacto
          </button>
         </th>
         <th>
         <button class="boton" style="background-color: #1BD1B1"  >About
          </button>
            
         </th>
         <th>
         <button class="boton" style="background-color: #1BD1B1"  >Buzòn de trabajo
          </button>
            
        </th>
      
  </tr>

        <tr>
      
            <td> https://tlaxiaco.tecnm.mx </td>
             <td>Sobre nosotros </td>
            <td>Buzòn_tt@tlaxiaco.tecnm.mx</td>
         <tr>
             <td>Telèfono: 000 000 0000 </td>
            
         </tr>
         <tr>
             <td>Buzòn_tt@tlaxiaco.tecnm.mx</td>
            
        </tr>

</table>
</center>
        </footer>
    </footer>

    </section>

   

</body>
</html>