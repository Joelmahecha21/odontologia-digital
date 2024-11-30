<?php
require_once('Conexion1.php');

class Usuario extends Conexion
{
    // Variables privadas
    private $correo;
    private $contrasena;
    
    // Constructor
    public function __construct() {
        parent::__construct();  // Llamar al constructor de la clase padre (Conexion)
    }

    // Métodos para obtener y establecer las variables privadas
    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    // Método login
    public function login() {
        // Realiza la consulta
        $consulta = $this->db->prepare("SELECT * FROM usuario WHERE correoUsuario = :correo AND passwordUsuario = :contrasena");
        $consulta->bindParam(":correo", $this->correo, PDO::PARAM_STR);
        $consulta->bindParam(":contrasena", $this->contrasena, PDO::PARAM_STR);
        $consulta->execute();

        if ($consulta->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
?>
