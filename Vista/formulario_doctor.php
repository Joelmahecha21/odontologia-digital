<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Doctores</title>
    <link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
    <link href="../Vista/css/formulario_doctor.css" rel="stylesheet" />
</head>
    <body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Doctor</h1>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                       
                           <div class="form-group">
                              <label for="uname">Nombre</label>
                              <input type="text" placeholder="Ingresar el Nombre" name="uname" required>
                           </div>
                           <div class="form-group">
                              <label for="uname">Apellido</label>
                              <input type="text" placeholder="Ingresar el Apellido" name="uname" required>
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
</div>

<div class="row">
    <div class="col-md-5 mx-auto">
        <div id="first">
            <div class="myform form ">
                <div class="logo mb-3">
                    <div class="col-md-12 text-center">
                        <h2>Consulta Doctor</h2>
        </div>
    </div>
                    <div class="col-md-12 text-center ">
                    <a class="btn btn-primary" href="Consulta_Doctor.php" role="button">Consultar</a>
                   </div>
</div>
</div>        
</div>
</html>
