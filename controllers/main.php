<?php
include_once 'models/consultamodel.php';

class Main extends Controller{

    function __construct(){
        parent::__construct();
     }
    function render(){
        $this->view->render('main/index');
    }
    function login(){
    $userSession = new UserSession();
    $user = new User();
     if(isset($_SESSION['user'])){
    //echo "Hay sesion";
    $user->setUser($userSession->getCurrentUser());

     include_once '/views/main/index.php';
     }else if(isset($_POST['email']) && isset($_POST['pass'])){

 // echo "validacion de login";
 $userForm = $_POST['email'];
 $passForm = $_POST['pass'];

 if($user->userExists($userForm, $passForm)){
  // echo "usuario validado";
  $userSession->setCurrentUser($userForm);
  $user->setUser($userForm);
   
   include_once 'views/principal/index.php';
 }else{
  // echo "nombre de usuario y/o password incorrecto";
 $errorLogin = "Nombre de usuario y/o password es incorrecto";
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