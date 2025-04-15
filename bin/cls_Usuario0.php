<?php

class Usuario {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function login($usuario, $clave) {
        // Asegúrate de que $this->conexion no sea null
        if ($this->conexion === null) {
            die("Error: No se ha establecido la conexión a la base de datos.");
        }

        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND clave = ?";
        $stmt = $this->conexion->prepare($sql);

        if ($stmt === false) {
            die("Error en la preparación de la consulta.");
        }

        $stmt->bind_param("ss", $usuario, $clave);
        $stmt->execute();
        
        // Lógica adicional...
    }
}

?>
