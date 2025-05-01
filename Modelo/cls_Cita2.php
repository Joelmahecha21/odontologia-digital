<?php
    
    require_once('Conexion.php');

    class Cita extends Conexion 
    {

        //VARIABLES
        private $idcita;
        private $horacita;
        private $fechacita;
        private $idDoctorFK;
        private $numdocClienteFK;
        private $idservicioFK;
        private $idempleadoFK;


        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }  

        //ENCAPSULAMIENTO---------------------------------------
        public function getidcita(){
            return $this->idcita;
        }
        public function setidcita($codigo){
            $this->idcita=$codigo;
        }
        public function gethoracita(){
            return $this->horacita;
        }
        public function sethoracita($timecit){
            $this->horacita=$timecit;
        }
        public function getidDoctorFK(){
            return $this->idDoctorFK;
        }
        public function setidDoctorFK($iddocFK){
            $this->idDoctorFK=$iddocFK;
        }
        public function getnumdocClienteFK(){
            return $this->numDocClienteFK;
        }
        public function setnumdocClienteFK($numerodocclieFK){
            $this->numDocClienteFK=$numerodocclieFK;
        }
        public function getidservicioFK(){
            return $this->idservicioFK;
        }
        public function setidservicioFK($idserFK){
            $this->idDoctorFK=$idserFK;
        }
        public function getidempleadoFK(){
            return $this->idempleadoFK;
        }
        public function setidempleadoFK($idempFK){
            $this->idempleadoFK=$idempFK;
        }

public function consultar_todos()
    {
        $filas = null;
        $consulta = $this->pdo->prepare("SELECT * FROM cita");
        $consulta->execute();

        while ($resultado = $consulta->fetch()){
            $filas[] = $resultado;
        }

        return $filas;
    }
}
?>