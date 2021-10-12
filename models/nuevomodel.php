<?php
class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIOS (NOMBRE, APELLIDO, TELEFONO, EMAIL,PASS) 
            VALUES(:nombre, :apellido, :telefono, :email, :pass)');

            $query->execute(['nombre' => $datos['nombre'],'apellido' => $datos['apellido'],'telefono' => $datos['telefono'],
            'email' => $datos['email'],'pass' => $datos['pass']]);
               // echo "Insertar datos";
                return true;
            }catch(PDOException $e){
                //echo $e->getMessage();
                //echo "Ya existe esa matricula";
                return false;
            }
        
    }

}


?>