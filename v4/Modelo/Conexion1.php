<?php
class Conexion {
    protected $db;

    public function __construct() {
        try {
            // Asegúrate de que estas credenciales sean correctas
            $this->db = new PDO('mysql:host=localhost;dbname=agendamiento_web', 'root', 'joel2112mahecha.');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }
}

?>