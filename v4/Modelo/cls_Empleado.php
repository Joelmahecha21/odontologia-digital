<?php
    class clsEmpleado {
        private $idEmpleado;
        private $numdocEmpleado;
        private $tipodocEmpleado;
        private $nombreEmpleado;
        private $apellidoEmpleado;
        private $telefonoEmpleado;
        private $direccionEmpleado;
        private $estadoEmpleado;
        private $idusuarioFK;
        private $idRolFK;
        //ENCAPSULAMIENTO---------------------------------------
        public function getidEmpleado(){
            return $this->idEmpleado;
        }
        public function setidEmpleado($idEmple){
            $this->idEmpleado=$idEmple;
        }
        public function getnumdocEmpleado(){
            return $this->numdocEmpleado;
        }
        public function setnumdocCliente($numerodocEmp){
            $this->numdocEmpleado=$numerodocEmp;
        }
        public function gettipodocEmpleado(){
            return $this->tipodocEmpleado;
        }
        public function settipodocCliente($tipdocumentoEmp){
            $this->tipodocEmpleado=$tipdocumentoEmp;
        }
        public function getnombreEmpleado(){
            return $this->numdocEmpleado;
        }
        public function setnombreEmpleado($nomEmp){
            $this->nombreEmpleado=$nomEmp;
        }
        public function getapellidoEmpleado(){
            return $this->apellidoEmpleado;
        }
        public function setapellidoEmpleado($apelEmp){
            $this->apellidoEmpleado=$apelEmp;
        }
        public function gettelefonoEmpleado(){
            return $this->telefonoEmpleado;
        }  
        public function settelefonoEmpleado($telEmp){
            $this->telefonoEmpleado=$telEmp;
        }
         public function getdireccionEmpleado(){
            return $this->direccionEmpleado;
        }
        public function settelefonoCliente($direcEmple){
            $this->direccionEmpleado=$direcEmple;
        }
        public function getestadoEmpleado(){
            return $this->estadoEmpleado;
        }
      
        public function setestadoEmpleado($stateEmp){
            $this->estadoEmpleado=$stateEmp;
        }
        public function getidusuarioFK(){
            return $this->idusuarioFK;
        }
        public function setidusuarioFK($usuFK){
            $this->idusuarioFK=$usuFK;
        }
        public function getidrolFK(){
            return $this->idRolFK;
        }
        public function setidrolFK($rlFK){
            $this->idRolFK=$rlFK;
        }
        //METODOS----------------------------------------------
        public function registrarEmpleado(){

        }
        public function consultarEmpleado(){

        }

    }

?>