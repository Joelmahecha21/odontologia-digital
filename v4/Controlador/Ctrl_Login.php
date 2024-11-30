<?php
    require_once('../Modelo/cls_Usuario3.php');

    if(isset($_POST) && !empty($_POST))
    {
        // Definimos dos variables que van a guardar los datos traidos por el metodo post desde los inputs
        $correo = $_POST['username'];
        $contrasena = $_POST['password'];

        // Crear objetos de la clase Usuario
        $objUsuario = new Usuario();

        // Enviar datos a la clase (usar los métodos setCorreo y setContrasena)
        $objUsuario->setCorreo($correo);
        $objUsuario->setContrasena($contrasena);

        // Verificar si el login es correcto
        if ($objUsuario->login() == true) {
            header('Location:../Vista/pagina_inicio_sesion.html');
        } else {
            header('Location:../Vista/registro.html?fallo=error');
        }

        // Verificar los datos que estoy enviando
        echo "El usuario digitado es: ".$objUsuario->getCorreo();
        echo " La clave digitada es: ".$objUsuario->getContrasena();
    }
?>
