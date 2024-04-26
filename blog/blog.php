<!-- DB Connection -->
<?php include "templates/includes/db.php" ?>

<?php include 'templates/includes/header.php' ?>
<!--Header Close -->

<!-- Navigation Start -->
<?php include "templates/includes/navigation.php" ?>

<div class="main-wrapper ">
	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Our blog</span>
						<h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
							<li class="list-inline-item"><span class="text-white">/</span></li>
							<li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section blog-wrap bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-5">
							<div class="blog-item">
								<?php

								
								// Preparar la consulta SQL
								$query = "SELECT * FROM posts";
								// Preparar la sentencia
								$stmt = $conn->prepare($query);
								// Ejecutar la sentencia
								$stmt->execute();
								// Obtener los resultados como un array asociativo
								$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

								// Verificar si se encontraron resultados
								if ($result) {
									// Iterar sobre los resultados y mostrarlos
									foreach ($result as $row) {
										echo "<li><a class='dropdown-item' href='blog.php'>" . $row['post_title'] . "</a></li>";
									}
								
								
								} else {
									echo "No se encontraron resultados.";
								}


								/*

								try {
									$query = "SELECT * FROM post";
									$select_all_posts_query = mysqli_query($conn, $query);

									while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
										$post_title = $row['title'];
										$post_author = $row['uthor'];
										$post_date = $row['date'];
										$post_image = $row['image'];
										$post_content = $row['content'];
								?>
										<?php if (isset($post_image)) : ?>
											<img src="images/blog/<?php echo $post_image; ?>" alt="" class="img-fluid rounded">
										<?php elseif (empty($post_image)) : ?>
											<img src="images/blog/no_image.jpg" alt="" class="img-fluid rounded">
										<?php endif; ?>

										<div class="blog-item-content bg-white p-4">
											<p class="text-muted py-1 px-2" style="margin: 0px">Autor:
												<a href="index.php"><?php echo $post_author; ?></a>
											</p>
											<div class="blog-item-meta  py-1 px-2">
												<span class="text-muted text-capitalize mr-3"><i class="ti-calendar mr-2"></i><?php echo $post_date; ?></span>
											</div>
											<h3 class="mt-3 mb-3"><a href="blog-single.html"><?php echo $post_title; ?></a></h3>
											<p class="mb-4"><?php echo $post_content; ?></p>

											<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Ver más</a>
										</div>
								<?php
									}
								} catch (Exception $e) {
									echo 'Caught exception: ',  $e->getMessage(), "\n";
								} */
								
								?>
							</div>
						</div>

					</div>
				</div>

				<!-- Sidebar Start -->
				<?php include "templates/includes/blog/sidebar.php"; ?>
				<!-- Sidebar Close -->

			</div>

			<div class="row mt-5">
				<div class="col-lg-8">
					<nav class="navigation pagination py-2 d-inline-block">
						<div class="nav-links">
							<a class="prev page-numbers" href="#">Prev</a>
							<span aria-current="page" class="page-numbers current">1</span>
							<a class="page-numbers" href="#">2</a>
							<a class="next page-numbers" href="#">Next</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!-- footer Start -->
	<?php include "templates/includes/footer.php"; ?>