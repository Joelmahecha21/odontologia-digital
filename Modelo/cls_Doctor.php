<?php
    class clsDoctor {
        private $idDoctor;
        private $nombreDoctor;
        private $apellidoDoctor;
        private $estadoDoctor;
        //ENCAPSULAMIENTO---------------------------------------
        public function getidDoctor(){
            return $this->idDoctor;
        }
        public function setidDoctor($idDoc){
            $this->idDoctor=$idDoc;
        }
        public function getnombreDoctor(){
            return $this->numdocDoctor;
        }
        public function setnombreDoctor($nomDoc){
            $this->nombreDoctor=$nomDoc;
        }
        public function getapellidoDoctor(){
            return $this->apellidoDoctor;
        }
        public function setapellidoEmpleado($apelDoc){
            $this->apellidoDoctor=$apelDoc;
        }
        public function getestadoDoctor(){
            return $this->estadoDoctor;
        }
        //METODOS----------------------------------------------
        public function consultarDoctor(){
        }
        public function consultarServicioporid($idservi){

        }
    }

?>