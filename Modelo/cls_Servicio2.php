<?php
    
    require_once('Conexion.php');

    class Servicio extends Conexion 
    {

        //VARIABLES
        private $idservicio;
        private $descripcionservicio;
        private $estadoservicio;


        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }  

        //ENCAPSULAMIENTO---------------------------------------
        public function getidservicio(){
            return $this->idservicio;
        }
        public function setidservicio($idservi){
            $this->idservicio=$idservi;
        }
        public function getdescripcionservicio(){
            return $this->descripcionservicio;
        }
        public function setcdescripcionservicio($descservi){
            $this->descripcionservicio=$descservi;
        }
        public function getestadoservicio(){
            return $this->estadoservicio;
        }
        public function setestadoservicio($stateservi){
            $this->estadoservicio=$stateservicio;
        }

        public function consultar_todos()
    {
        $filas = null;
        $consulta = $this->pdo->prepare("SELECT * FROM servicio");
        $consulta->execute();

        while ($resultado = $consulta->fetch()){
            $filas[] = $resultado;
        }

        return $filas;
    }
}
?>
