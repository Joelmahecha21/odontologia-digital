<?php
    
    require_once('Conexion.php');

    class Rol extends Conexion 
    {

        //VARIABLES
        private $idRol;
        private $descripcionRol;
        private $estadoRol;


        //Constructor
        
        public function __construct() {
            
            $this->db=parent::__construct();
        }

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


public function consultar_todos()
{
    $filas=null;
    $consulta=$this->db->prepare("SELECT * FROM rol");
    $consulta->execute();

    while($resultado=$consulta->fetch()){
        $filas[]=$resultado;
    }

    return $filas;
}
}
?>