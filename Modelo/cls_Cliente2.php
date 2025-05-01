<?php
    
    require_once('Conexion.php');

    class Cliente extends Conexion 
    {

        //VARIABLES
        private $idCliente;
        private $numdocCliente;
        private $tipodocCliente;
        private $nombreCliente;
        private $apellidoCliente;
        private $telefonoCliente;
        private $direccionCliente;
        private $estadoCliente;
        private $idusuarioFK;

        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }  

        //ENCAPSULAMIENTO
        public function getidCliente(){
            return $this->idCliente;
        }
        public function setidCliente($idcli){
            $this->idCliente=$idcli;
        }
        public function getnumdocCliente(){
            return $this->numdocCliente;
        }
        public function setnumdocCliente($numerodoc){
            $this->numdocCliente=$numerodoc;
        }
        public function gettipodocCliente(){
            return $this->tipodocCliente;
        }
        public function settipodocCliente($tipdocumento){
            $this->tipodocCliente=$tipdocumento;
        }
        public function getnombreCliente(){
            return $this->numdocCliente;
        }
        public function setnombreCliente($name){
            $this->nombreCliente=$name;
        }
        public function getapellidoCliente(){
            return $this->apellidoCliente;
        }
        public function setapellidoCliente($surname){
            $this->apellidoCliente=$surname;
        }
        public function gettelefonoCliente(){
            return $this->telefonoCliente;
        }
        public function settelefonoCliente($phone){
            $this->telefonoCliente=$phone;
        }
        public function getdireccionCliente(){
            return $this->direccionCliente;
        }
        public function setdireccionEmpleado($direcCli){
            $this->direccionCliente=$direcCli;
        }
        public function getestadoCliente(){
            return $this->estadoCliente;
        }
        public function setestadoCliente($statecli){
            $this->estadoCliente=$statecli;
        }
        public function getidusuarioFK(){
            return $this->idusuarioFK;
        }
        public function setidusuarioFK($usuFK){
            $this->idusuarioFK=$usuFK;
        }

public function consultar_todos()
    {
        $filas = null;
        $consulta = $this->pdo->prepare("SELECT * FROM cliente");
        $consulta->execute();

        while ($resultado = $consulta->fetch()){
            $filas[] = $resultado;
        }

        return $filas;
    }
}
?>