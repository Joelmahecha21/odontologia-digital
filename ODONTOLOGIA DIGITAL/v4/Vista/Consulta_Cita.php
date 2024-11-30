<!DOCTYPE html>
<html lang="es">
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html lang="es">
<!-- Iconos -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<title>Odontologia Digital</title>
<link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="../Vista/css/styles.css" rel="stylesheet" type="text/css">
    </head>
	<body>
	<h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Odontologa integral y estetica</span>
                <span class="site-heading-lower">Odontologia Digital</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
			<a class="navbar-brand" href="../Vista/pagina_inicio_sesion.html">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="pagina_inicio_sesion.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  <div class="container-fluid">
	<!-- Tabla -->
	<table class="table table-secondary">

	<tr>
		<td>idcita</td>
		<td>horacita</td>
		<td>fechacita</td>
		<td>idDoctorFK</td>
		<td>numdocClienteFK</td>
		<td>idservicioFK</td>
        <td>idempleadoFK</td>
        <td>consultas</td>
		
	</tr>
	<?php
		require_once('../Modelo/cls_Cita2.php');
		$objeto=new Cita();
		$filas=$objeto->consultar_todos();

		foreach($filas as $fila){
		?>
			<tr>
			<td><?php echo $fila['idcita'];?></td>
			<td><?php echo $fila['horacita'];?></td>
			<td><?php echo $fila['fechacita'];?></td>
			<td><?php echo $fila['idDoctorFK'];?></td>
			<td><?php echo $fila['numdocClienteFK'];?></td>
            <td><?php echo $fila['idservicioFK'];?></td>
            <td><?php echo $fila['idempleadoFK'];?></td>
	        <td><a class="btn btn-outline-primary" href="editar_datos.php">editar</a></td> 

			                                                                                                                          
		</tr>                 
		<?php
		}
	?>


	</table>
</div>	
				
		</div>
	</div>
	<footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> © 2024 odontologia digital   &copy;  </p></div>
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Consultorio-Odontologico-Dra-Betsymar-Celis-289706608529531/" role="button"><i class="fab fa-facebook-f"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/od.betsymarcelis/" role="button"><i class="fab fa-instagram"></i></a>
              </section>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../Vista/js/scripts.js"></script>
          </div>
    </body>
</html>
