<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para citas</title>
    <link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
    <link href="../Vista/css/formulario_cita.css" rel="stylesheet" />
</head>
<header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-lower">Cita</span>
            </h1>
        </header>
    <body>

                   <form action="" method="post" name="login">
                       
                           <div class="form-group">
                              <label for="uname"><h4>Numero de documento del cliente</h4></label>
                              <input type="text" placeholder="Ingresar el Numero de documento" name="uname" required>
                           </div>
                           <div class="form-group">
                            <h4>Fecha de la cita</h4>
                            <input type="date">
                           </div>
                           <div class="form-group">
                            <h4>Hora de la cita</h4>
                            <input type="time">
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
                    <h2>Consulta Cita</h2>
                    
    </div>

</div>
    

                    <div class="col-md-12 text-center ">
                    <a class="btn btn-primary" href="Consulta_Cita.php" role="button">Consultar</a>
                   </div>

                   
    </body>
</html>
