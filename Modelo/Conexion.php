<?php
//variables
    class Conexion
     {
        private $server= 'localhost:3306';
        private $user= 'root';
        private $password= 'joel2112mahecha.';
        private $database= 'agendamiento_web';
   
    //Constructor

    public function __construct()
		{
			try{
				$connect=new PDO("mysql:host=".$this->server.";dbname=".$this->database,$this->user,$this->password);
				return $connect;
			}catch(PDOException $error){
				return "error al conectarse: ".$error;
			}
		}

	}

?>

