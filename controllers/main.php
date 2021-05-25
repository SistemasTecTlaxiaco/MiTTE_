<?php
include_once 'models/consultamodel.php';
class Main extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $this->view->render('main/index');
    }
    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }

    function login(){
    $userSession = new UserSession();
      $user = new User();
     if(isset($_SESSION['user'])){
    //echo "Hay sesion";
    $user->setUser($userSession->getCurrentUser());
     include_once '/views/main/home.php';
     }else if(isset($_POST['email']) && isset($_POST['pass'])){

 // echo "validacion de login";
 $correoForm = $_POST['email'];
 $contraseñaForm = $_POST['pass'];

 if($user->userExists($correoForm, $contraseñaForm)){
  // echo "usuario validado";
  $userSession->setCurrentUser($correoForm);
  $user->setUser($correoForm);
   
   include_once 'views/main/home.php';
 }else{
  // echo "nombre de usuario y/o password incorrecto";
 $errorLogin = "Correo de usuario y/o password incorrecto";
 include_once 'views/main/index.php';
}
}else{
  //  echo "login";
    include_once 'views/main/index.php';
}
$this->view->render('consulta/index.php');
    }

    
}
?>