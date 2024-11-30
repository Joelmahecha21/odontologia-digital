<?php
    class clsRol {
        private $idRol;
        private $descripcionRol;
        private $estadoRol;
        //ENCAPSULAMIENTO---------------------------------------
        public function getidRol(){
            return $this->idRol;
        }
        public function setidRol($idrl){
            $this->idRol=$idrl;
        }
        public function getdescripcionRol(){
            return $this->descripcionRol;
        }
        public function setcdescripcionRol($descrol){
            $this->descripcionRol=$descrol;
        }
        public function getestadoRol(){
            return $this->estadoRol;
        }
        public function setestadoRol($staterol){
            $this->estadoRol=$staterol;
        }

        //METODOS----------------------------------------------
        public function consultarRol(){

        }
        public function consultarRolporid($idrl){

        }
    }

?>
