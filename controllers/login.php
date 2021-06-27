<?php
include_once 'controllers/principal.php';
class Login extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alerta="";  
       $this->view->mensaje="";      
    }
    function render(){
        $this->view->render('login/index');
    }    
    function authenticate(){
    include_once 'includes/user.php';
      $userSession = new UserSession();
      $user = new User();
if(isset($_POST['email']) && isset($_POST['password'])){
 $correoForm = $_POST['email'];
 $contraseñaForm = $_POST['password'];
 if($this->model->login($correoForm, $contraseñaForm)){
  $user->setUser($correoForm); 
  $home= new principal();
  $nomUser= $user->getNombre();
  $userSession->setCurrentUser($correoForm, $nomUser);  
  //$home->render()->nomUser= $user; 
 // $home->recibir($nomUser);
 header('Location:'.constant('URL').'principal'); 
  //header('Location:'.constant('URL').'principal'.'/usuario'.'/'.$nomUser);
  //include_once 'views/principal/index.php';
 }else{  
  $alert='d-flex d-lg-block';
  $errorLogin ="El correo electronico y/o password es incorrecto"; 
  $this->view->alerta=$alert;
  $this->view->mensaje=$errorLogin;
  $this->render();
}
}else{ 
    include_once 'views/main/index.php';
}
    }
    }
?>