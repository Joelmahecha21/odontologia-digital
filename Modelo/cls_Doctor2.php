<?php
    
    require_once('Conexion.php');

    class Doctor extends Conexion 
    {

        //VARIABLES
        private $idDoctor;
        private $nombreDoctor;
        private $apellidoDoctor;
        private $estadoDoctor;


        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }  

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

public function consultar_todos()
    {
        $filas = null;
        $consulta = $this->pdo->prepare("SELECT * FROM doctor");
        $consulta->execute();

        while ($resultado = $consulta->fetch()){
            $filas[] = $resultado;
        }

        return $filas;
    }
}
?>