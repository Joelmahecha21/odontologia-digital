<?php
if(!empty($_POST['username']) && !empty($_POST['contrasena'])){
    $email =  $_POST['username'];
    $password = $_POST['contrasena'];
        if($email == "nose" && $password == "1234"){
            header("location: ../Vista/inicio.html");
        }
        else{
            if($email == "hola" && $password == "usted"){
                header("location: ../Vista/home.php");
            }
            else{
                header("location: ../Vista/error_ingreso.php");
            }
    }
}
else{
    header("location: ../Vista/error_ingreso.php");
}
?>