<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
       $this->view->mensaje="";
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $this->view->render('nuevo/index');
    }
    function registrarAlumno(){
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $telefono  = $_POST['telefono'];
        $email     = $_POST['email'];
        $pass      = md5($_POST['pass']);

        if($this->model->insert(['nombre' =>$nombre, 'apellido' =>$apellido,   'telefono'=>$telefono,  'email'=>$email,
        'pass'=>$pass])){
            $mensaje ="Usuario creado";
        }else{
            $mensaje="El correo ya existe";
        }
        $this->view->mensaje=$mensaje;
        $this->render();
       // echo "Alumno creado";
       // $this->model->insert();
    }
}
?>