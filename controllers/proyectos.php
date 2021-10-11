<?php
session_start();
include_once 'includes/user.php';
include_once 'models/sistemamodel.php';
class proyectos extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->nomUser=""; 
        $this->view->files=[]; 
        $this->view->notificacion=[];  
    }
    function render(){ 
        if(isset($_SESSION['user'])){        
        $nomUser=$_SESSION['user']; 
        $user= new user();
        $user->setUser($nomUser);
        $nom=$user->getNombre();
        $this->view->nomUser=$nom;
        $itemDatos=$user->getPhoto($nomUser);       
        $this->view->datos=$itemDatos; 
        $file= new SistemaModel(); 
        $datos=$file->get();           
        $this->view->files=$datos;  
        $Noti=$user->getNotificaciones();       
        $this->view->notificacion=$Noti;              
        $this->view->render('proyectos/index');
    }else{
        header('Location:'.constant('URL').'errores/ErrorAcceso'); 
        die();
    }    
    }
}