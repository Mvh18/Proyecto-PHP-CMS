<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support1@gmail.com"><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo.png" alt="" class="logo">
				<!--K<span>rea.</span> -->
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navbarsExample09">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="about.html">Our company</a></li>
							<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="blog.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<?php

							$query = "SELECT title FROM category"; // Selecciona solo la columna title ya que es la que se utiliza en el bucle while

							$query_result = $conn->query($query);

							if ($query_result) { // Verifica si la consulta se ejecutó correctamente
								while ($row = $query_result->fetch(PDO::FETCH_ASSOC)) { // Utiliza el método fetch_assoc() directamente en el resultado de la consulta
									echo "<li><a class='dropdown-item' href='blog.php'>{$row['title']}</a></li>";
								}
							} else {
								echo "Error en la consulta: " . $connection->error; // Manejo de errores si la consulta falla
							}

							?>
						</ul>
					</li>
					<!--<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li> -->
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>

				<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
					<a href="contact.html" class="btn btn-solid-border btn-round-full">Get a Quote</a>
				</form>
			</div>
		</div>
	</nav>
</header>