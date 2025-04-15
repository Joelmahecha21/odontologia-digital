<?php
    class clsUsuario {
        private $idusuario;
        private $correoUsuario;
        private $passwordUsuario;
        private $estadoUsuario;
        //ENCAPSULAMIENTO---------------------------------------
        public function getidusuario(){
            return $this->idusuario;
        }
        public function setidusuario($codigo){
            $this->idusuario=$codigo;
        }
        public function getcorreoUsuario(){
            return $this->correoUsuario;
        }
        public function setcorreoUsuario($correousu){
            $this->correoUsuario=$numerodoc;
        }
        public function getpasswordUsuario(){
            return $this->passwordUsuario;
        }
        public function setpasswordUsuario($passusu){
            $this->passwordUsuario=$passusu;
        }
        public function getestadoUsuario(){
            return $this->estadoUsuario;
        }
        public function setestadoUsuario($stateusu){
            $this->estadoUsuario=$stateusu;
        }

        //METODOS----------------------------------------------
        public function registrarUsuario(){

        }
        public function consultarUsuario(){

        }
        public function inhabilitarUsuario(){

        }
        public function validarUsuario(){

        }
        public function verperfilUsuario(){

        }

    }

?>

