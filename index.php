<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		/*
		* Cambiar los valores de $up_dir dependiendo de en que nivel se encuentre
		* la vista que se agregó, por ejemplo:
		*	proyecto/
		*	├── assets/
		*	├── structure/
		* ├── otra_carpeta/
		* │   └── Subcarpeta/
		* │   		├── archivo01.php -> En este caso $up_dir debe ser igual a 2
		* │   		└── archivo02.php
		*	└── carpeta_donde_hay_vistas/
		*	    ├── archivo01.php -> En este caso $up_dir debe ser igual a 1
		*	    ├── archivo02.php
		*	    ├── archivo03.php
		*	    ├── archivo04.php
		*	    └── archivo05.php
		*/
		$up_dir = 0; for( $i01=1; $i01<=$up_dir; $i01++ ) { $dir.="../"; }
	?>
	<?php
		$view_name="Inicio";
		include(/*$dir.*/"structure/head.php");
		$asset = "assets/img/folder_name/"; // Path where are storaged media files (img, video, etc)

		// if(session_status()==="") session_start();
		// logout();
		// unset( $_SESSION );
		// $pswd_ed = "Stratega2020*";
		// $pswd_encrypted = Auth::cryptBlowfish($pswd_ed);
		// dd( $pswd_ed, $pswd_encrypted );
	?>

</head>
<body>
	<?php $active="index"; include(/*$dir.*/"structure/navbar.php"); ?>

	<?php /*
	<?php #Carousel example ?>
	<div id="carouselExampleSlidesOnly" class="carousel full-carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active" style="background-image:url('http://placehold.it/1900x1080');">
	      <span class="visually-hidden">First slide</span>
	    </div>
	    <div class="carousel-item" style="background-image:url('http://placehold.it/1900x1080');">
	      <span class="visually-hidden">Second slide</span>
	    </div>
	    <div class="carousel-item" style="background-image:url('http://placehold.it/1900x1080');">
	      <span class="visually-hidden">Third slide</span>
	    </div>
	  </div>
	</div>
	*/ ?>

	<section class="cover bg-cover-index">
		<span class="visually-hidden">If you need to add a cover to your page</span>
	</section>

	<div class="container-fluid py-3">
		<div class="row">
			<div class="col-md-4 p-0">
				<img class="img-fluid d-block" src="http://placehold.it/650x300.png" alt="">
			</div>
			<div class="col-md-4 p-0">
				<img class="img-fluid d-block" src="http://placehold.it/650x300.png/333/aaa/" alt="">
			</div>
			<div class="col-md-4 p-0">
				<img class="img-fluid d-block" src="http://placehold.it/650x300.png" alt="">
			</div>
		</div>
	</div>

	<section class="bg-default-02 pt-60 pb-60">
		<div class="container-custom">
			<div class="row mb-3">
				<div class="col-md-12">
					<h1 class="h1-bigger">Example - h1-bigger</h1>
					<h2 class="h2-bigger">Example - h2-bigger</h2>
					<h3 class="h3-bigger">Example - h3-bigger</h3>
					<h4 class="h4-bigger">Example - h4-bigger</h4>
					<h5 class="h5-bigger">Example - h5-bigger</h5>
					<h6 class="h6-bigger mb-3">Example - h6-bigger</h6>

					<h1>Example - h1</h1>
					<h2>Example - h2</h2>
					<h3>Example - h3</h3>
					<h4>Example - h4</h4>
					<h5>Example - h5</h5>
					<h6>Example - h6</h6>
					<p>Imágen con efecto wordpress al hacer hover</p>
					<div class="wp-effect">
						<img class="img-fluid" src="http://placehold.it/300x200.png?text=300x200.jpg" alt="300x200.jpg">
					</div>

					<h2 class="my-3">Botones al 100%</h2>
					<div class="row justify-content-center mb-3">
						<div class="col-md-12">
							<div class="d-grid">
								<button class="btn btn-primary rounded-0"><i class="fas fa-upload"></i>Subir archivo</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-md-4">
					<div class="wp-effect">
						<img class="img-fluid" src="http://placehold.it/400x400.png?text=400x400.jpg" alt="400x400.jpg">
					</div>
				</div>
				<div class="col-md-8">
					<p class="mb-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum veritatis nulla pariatur optio! Fugiat dolores maxime tempora, ipsa ratione debitis doloremque quod praesentium quia. Nulla hic et accusamus doloribus.
					</p>
					<p>Otro ejemplo de hover.</p>
				</div>
			</div>
		</div>
	</section>

	<?php include(/*$dir.*/"structure/footer.php"); ?>
</body>
</html>
