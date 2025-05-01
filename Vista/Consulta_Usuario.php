<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Iconos -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Odontologia Digital</title>
        <link rel="icon" type="image/x-icon" href="../Public/img/odo.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../Vista/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">De todos, para todos</span>
                <span class="site-heading-lower">Odontologia Digital</span>
            </h1>
        </header>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
			<a class="navbar-brand" href="../Vista/pagina_inicio_sesion.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="pagina_inicio_sesion.html">Home</a></li>
                    </ul>
                </div>
  <div class="container-fluid">
	<!-- Tabla -->
	<table class="table table-secondary">

	<tr>
		<td>idusuario</td>
		<td>correoUsuario</td>
		<td>passwordUsuario</td>
		<td>estadoUsuario</td>
		<td>idrolFK</td>
		<td>consultas</td>
		
	</tr>
	<?php
		require_once('../Modelo/cls_Usuario2.php');
		$objeto=new Usuario();
		$filas=$objeto->consultar_todos();

		foreach($filas as $fila){
		?>
			<tr>
			<td><?php echo $fila['idusuario'];?></td>
			<td><?php echo $fila['correoUsuario'];?></td>
			<td><?php echo $fila['passwordUsuario'];?></td>
			<td><?php echo $fila['estadoUsuario'];?></td>
			<td><?php echo $fila['idrolFK'];?></td>
	        <td><a class="btn btn-outline-primary" href="editar_datos.php">editar</a></td> 

			                                                                                                                          
		</tr>                 
		<?php
		}
	?>


	</table>
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

    