<?php
include_once 'models/alumno.php';
class User extends Database{
    private $nombre;
    private $correo;
    
    public function userExists($user, $contraseña){
        $md5pass = md5($contraseña);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE email = :user AND password = :email');
        $query->execute(['user' => $user, 'contraseña' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE email = :user');
        $query->execute(['user' => $user]);        
        foreach ($query as $currentUser) {
            $this->correo  = $currentUser['email'];
            $this->nombre =  $currentUser['nombre'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getPhoto($user){
        $item= new Alumno();
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE email = :user');
        $query->execute(['user' => $user]);        
         while ($row = $query->fetch()) {
        $item->foto = $row ['imagen'];            
        }
        return$item;
    }
}

?>