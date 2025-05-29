<!DOCTYPE html>
<html lang="es">
  <head>
  <link href="../Vista/css/editdatos.css" rel="stylesheet" type="text/css">   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
    <title>Odontologia Digital</title>
    </head>

<body>
    <div class="sidebar">
        <a href="menu_v2.html">Menu Principal</a>
        <a href="formulario_usuario.php" class="active">Usuarios</a>
        <a href="formulario_empleado.php" class="active">Empleado</a>
        <a href="formulario_cliente.php" class="active">Cliente</a>
        <a href="formulario_doctor.php" class="active">Doctor</a>
        <a href="formulario_servicio.php" class="active">Servicios</a>
        <a href="formulario_cita.php" class="active">Citas</a>
        <a href="formulario_rol.php" class="active">Rol</a>
</div>
<div class="content">
    <h3>Formulario de edicion de datos de usuario</h3>
    <br>
    <form method="POST" action="#">
        <label>Codigo: </label>
        <input type="number" name="txtCodigo" class="form-control"
        ><br>
        <input type="submit" name="btnConsultarUsuairio" value="Consultar Datos" class="btn btn-primary">   
    </form>
    <!--FORMULARIO DONDE SE MOSTRARAN LAS DATOS ASOCIADOS AL CODIGO DIGITADO -->
    <form method="POST" action="#">
        <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="txtNombre" class="form-control">
        <label>Tipo:</label>
        <select name="txtTipo" class="form-control">
            <option>admin</option>
            <option>empleado</option>
        </select>
        <label>Clave: </label>
        <input type="password" name="txtClave" class="form-conrol">
        <label>Confirmacion: </label>
        <input type="password" name="txtConfirmacion" class="form-conrol">
        </div>
    
    </form>
</div>

</body>
</html>