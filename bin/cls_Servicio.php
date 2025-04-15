<?php
    class clsServicio {
        private $idservicio;
        private $descripcionservicio;
        private $estadoservicio;
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

        //METODOS----------------------------------------------
        public function consultarservicio(){

        }
        public function consultarServicioporid($idservi){

        }
    }

?>
