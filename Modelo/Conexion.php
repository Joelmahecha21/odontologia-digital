<?php
class Conexion
{

    private $server = 'localhost'; 
    private $port = '3306'; 
    private $user = 'root';
    private $password = '';
    private $database = 'agendamiento_web';
    private $charset = 'utf8';

    protected $pdo;

    //Constructor
    public function __construct() {
        // Usando los nombres de propiedad correctos y el puerto en el DSN si es necesario
        $dsn = "mysql:host=$this->server;port=$this->port;dbname=$this->database;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            // Usando los nombres de propiedad correctos para el usuario y la contraseña
            $this->pdo = new PDO($dsn, $this->user, $this->password, $options);
            // echo "Conexión exitosa!"; // Opcional: para depuración, puedes quitar esto después
        } catch (\PDOException $e) {
            // Si falla, muestra un error y detén la ejecución
            // Muestra el error exacto de PDO
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    // Opcional: Método para obtener la conexión si no quieres acceder directamente a la propiedad
    // protected function getDb() {
    //     return $this->pdo;
    // }
}
?>