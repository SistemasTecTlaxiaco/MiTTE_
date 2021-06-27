<?php
session_start();
include_once 'includes/user.php';
class nuevoArchivo extends Controller{
    function __construct(){
        parent::__construct();
       $this->view->mensaje="";
       $this->view->nomUser=""; 
       $this->view->alerta="";
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
        $this->view->render('nuevo_archivo/index');
        }
        else{
            header('Location:'.constant('URL').'errores/ErrorAcceso'); 
            die();
        } 
    }
    function registrar(){      
        $titulo= $_POST['titulo'];
        $autor= $_POST['autor'];
        $materia= $_POST['materia']; 
        $tipoA= $_POST['tipo']; 
        $descripcion= $_POST['descripcion'];       
        $user=$_SESSION['user']; 
        $temp='../../../temp/';
        $file='uploads/file/';
        $id=$this->model->getId($user);
        $usuario=$file.$id->id.'/';   
        if(!file_exists($temp)){        
            mkdir($temp,0777,true);
        } 
            if(!file_exists($usuario)){        
                mkdir($usuario,0777,true);
            }       
          $nombre=$_FILES['archivo']['name'];
          $tipo=$_FILES['archivo']['type'];
          $tamano=$_FILES['archivo']['size'];
          $rutatemp=$_FILES['archivo']['tmp_name'];      
          $destino=$_SERVER['DOCUMENT_ROOT'].'/sistema2'.'/MiTTE_'.'/'.'uploads/file/'.$id->id.'/';
          if($tamano>0 && $tamano<=2099879){
            if($tipo=="application/pdf"||$tipo=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"||$tipo=="application/vnd.openxmlformats-officedocument.presentationml.presentation"){
          move_uploaded_file($rutatemp,$destino.$nombre);  
          $ruta='/'.$file.$id->id.'/'.$nombre;  
        if($this->model->subir(['nombre'=>$nombre,'ruta'=>$ruta,'titulo'=>$titulo, 'autor'=> $autor,'materia' =>$materia,
        'tipo'=>$tipoA,'descripcion'=>$descripcion,'user'=>$user])){
            $actividad="Subio el archivo: ".$nombre;
            $this->model->activity(['actividad'=>$actividad, 'user'=>$user]);
            $alert=' <div class="alert alert-success alert-dismissible  align-items-start d-"flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>  
            Tu archivo se subio con exito<tab><tab><tab> &nbsp <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button></div>        
              </div>'; 
            $this->view->alerta=$alert;             
            $this->render();           
        }else{
            $alert='<div class="alert alert-danger alert-dismissible  align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp Ocurrio algun error, verifca los datos que ingresaste en los campos nuevamente. </div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta=$alert; 
            $this->render(); 
        }
    }
        else{
            $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp El formato del es incompatible o no aceptado, intente subir otro tipo de archivo &nbsp <tab><tab><tab> &nbsp</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta=$alert; 
            $this->render(); 
        }
        } else{
            $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp El tamaño del archivo es demasiado grande, tiene que ser menor a 2mb, intenta nuevamente por favor. &nbsp <tab><tab><tab> &nbsp</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta=$alert; 
            $this->render(); 
        }   
               
    }
    function upload(){ 
        $temp='../../../temp/';
        if(!file_exists($temp)){        
            mkdir($temp,0777,true);
        }     
          $nombre=$_FILES['archivo']['name'];
          $tipo=$_FILES['archivo']['type'];
          $size=$_FILES['archivo']['size'];
          $rutatemp=$_FILES['archivo']['tmp_name'];
          echo $tipo; 
          //echo $rutatemp;
         // $destino=$_SERVER['DOCUMENT_ROOT'].'/sistema2'.'/MiTTE'.'/'.'uploads/';
         // move_uploaded_file($rutatemp,$destino.$nombre);
    
        $this->render();   
    }
    
   
}
?>