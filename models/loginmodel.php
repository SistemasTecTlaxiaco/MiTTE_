<?php
class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function login($email, $password){
        // insertar datos en la BD
        error_log("login: inicio");        
            //$query = $this->db->connect()->prepare('SELECT * FROM users WHERE username = :username');
            $query = $this->prepare('SELECT * FROM usuarios WHERE email = :email');
            $query->execute(['email' => $email]);
            if($query->rowCount()){
            $item = $query->fetch(PDO::FETCH_ASSOC);
             if(password_verify($password, $item['pass'])){                      
               error_log('login: success');              
             return  true;                    
                }
                else{
                    return false;
                }
                return  true;  
            }else{
                return false; 
            }
        }
    }   

?>