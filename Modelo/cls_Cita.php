<?php
    class clsCita {
        private $idcita;
        private $horacita;
        private $fechacita;
        private $idDoctorFK;
        private $numdocClienteFK;
        private $idservicioFK;
        private $idempleadoFK;
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
            return $this->numdocClienteFK;
        }
        public function setnumdocClienteFK($numerodocclieFK){
            $this->numdocClienteFK=$numerodocclieFK;
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

        //METODOS----------------------------------------------
        public function registarCita(){

        }
        public function consultarCita(){

        }
        public function cancelarCita(){

        }

    }

?>
