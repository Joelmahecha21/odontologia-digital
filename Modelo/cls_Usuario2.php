<?php
    
    require_once('Conexion.php');

    class Usuario extends Conexion 
    {

        //VARIABLES
        private $correo;
        private $contrasena;


        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }  

        //ENCAPSULAMIENTO
        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($cor){
            $this->correo=$cor;
        }

        public function getContrasena(){
            return $this->contrasena;
        }

        public function setContrasena($con){
            $this->contrasena=$con;
        }


        // Metodo Login

        public function login()
        {
        
            $consulta = $this->db->prepare("SELECT * FROM usuario WHERE correoUsuario = :Usuario AND passwordUsuario = :Clave");
            $consulta->bindParam(':Usuario',$this->correo);
            $consulta->bindParam(':Clave',$this->contrasena);
            $consulta->execute();

            if($consulta->rowCount()==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function consultar_todos()
        {
            $filas=null;
            $consulta=$this->db->prepare("SELECT * FROM usuario");
            $consulta->execute();

            while($resultado=$consulta->fetch()){
                $filas[]=$resultado;
            }

            return $filas;
        }
    }
?>