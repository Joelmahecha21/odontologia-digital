<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario para Usuarios</title>
<link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
<link href="../Vista/css/formulario_usuario.css" rel="stylesheet" type="text/css">

  <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-lower">Usuario</span>
            </h1>
        </header>
                    
                   <form action="" method="post" name="login">
                       
                           <div class="form-group">
                              <label for="uname">Correo</label>
                              <input type="text" placeholder="Ingresa tu Correo" name="email" required>
                           </div>
                           <div class="form-group">
                              <label for="uname">Contrasena</label>
                              <input type="password" placeholder="Ingresa una contrasena" name="psw" required>
                           </div>
                           <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                                <select id="inputState" class="form-select">
                                    <option>ACTIVO</option>
                                    <option>INACTIVO</option>
                                </select>
                            </div>
</div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Ingresar</button>
                           </div>
              
                           <div class="row">

<div class="col-md-5 mx-auto">
    <div id="first">
        <div class="myform form ">
            <div class="logo mb-3">
                <div class="col-md-12 text-center">
                    <h2>Consulta Usuario</h2>
                    

    </div>

</div>

                <div class="col-md-12 text-center ">
                <a class="btn btn-primary" href="Consulta_Empleado.php" role="button">Consultar</a>
               </div>


    </body>
</html>
