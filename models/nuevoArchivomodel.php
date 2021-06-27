<?php
class NuevoArchivoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function getId($email){
        $item =new Alumno();
        $query =$this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :user");
        try {  
                $query->execute(['user' => $email]);
                while ($row = $query->fetch()) {
                $item->id = $row ['id'];                  
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }

    }

    public function subir($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO ARCHIVO(NOMBRE,RUTA,TITULO,AUTOR,MATERIA,TIPO,DESCRIPCION,USER) 
            VALUES(:nombre, :ruta, :titulo, :autor, :materia,:tipo,:descripcion, :user)');
            $query->execute(['nombre' => $datos['nombre'],'ruta' => $datos['ruta'],'titulo' => $datos['titulo'], 
            'autor' => $datos['autor'],'materia' => $datos['materia'],'tipo' => $datos['tipo'],'descripcion' => $datos['descripcion'],'user' => $datos['user']]);  
                return true;
            }catch(PDOException $e){
                return false;
            }            
    }
    public function activity($datos){
        try{
        $query = $this->db->connect()->prepare('INSERT INTO actividad(actividad, usuario) VALUES(:actividad, :usuario)');
        $query->execute(['actividad' => $datos['actividad'],'usuario' => $datos['user']]);  
            return true;
        }catch(PDOException $e){
            return false;
        }      
    }

}


?>