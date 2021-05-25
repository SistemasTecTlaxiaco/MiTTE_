<?php
include_once 'models/alumno.php';
    class ConsultaModel extends Model{
        public function __construct() {
            parent:: __construct();
        }

    public function get(){
     $items = [];
     try {         
         $query = $this->db->connect()->query("SELECT*FROM usuarios");
         while($row = $query->fetch()){
            $item = new Alumno();
            //creamos un objeto de tipo alumno y
            //alas propiedades le asignamos la
            // propiedades
            $item->nombre=$row['nombre'];
            $item->apellido=$row['apellido'];
            $item->telefono =$row['telefono'];
            $item->email=$row['email'];
            $item->pass=$row['pass'];
            //funcion que permite ingresar al arreglo un nuevo valores que tenemos en la base de datos
            array_push($items, $item);
         }
        return $items;
     } catch (PDOException $e) {
         
        return [];
     }            
        }
        public function getById($id){
            $item =new Alumno();
            $query =$this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
            try {
                $query->execute(['matricula' => $id]);
                while ($row = $query->fetch()) {
                    $item->matricula = $row ['matricula'];
                    $item->nombre = $row ['nombre'];
                    $item->apellido = $row ['apellido'];
                }
                return $item;
            } catch (PDOException $e) {
                return null;
            }
        }
        public function update($item){
            $query =$this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");
            try{
                $query->execute([
                    'matricula' => $item['matricula'],
                    'nombre' => $item['nombre'],
                    'apellido' => $item['apellido']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }

?>