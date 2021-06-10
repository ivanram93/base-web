<?php
	include("../php/admin.head.php");

	$current_pg = "Subcategoría";
	$word = "subcategory";
	$table = "subcategories";
	if( Auth::check() && Auth::user()->permission_admin==1 && Auth::user()->permission_subcategories_c==1 ) {
		$mysqli = Connection::conectar_db();
		Connection::selecciona_db($mysqli);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		$current_pg3 = "Crear ".$current_pg;
		$title="Blog | ".$current_pg3;
		$current_pg2 = $current_pg3;
		$copy_year = date("Y",strtotime("today"));
		include("structure/head.php");
		$breadcrumb = [
			[
				"link" => "/",
				"word" => "Dashboard",
			],
			[
				"link" => "/subcategories",
				"word" => "Subcategorías",
			],
			[
				"link" => "/subcategories/".$table,
				"word" => $current_pg2,
			]
		];
	?>
	<?php /*<script src="<?php echo $env->APP_URL_ADMIN; ?>assets/js/datatables/jquery.js"></script>*/ ?>
	<script src="<?php echo $env->APP_URL_ADMIN; ?>assets/js/datatables/jquery.dataTables.js"></script>
	<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
	<script src="assets/js/validateFormEdit.js"></script>
	<script src="assets/js/select-scripts.js"></script>
</head>
<body class="sb-nav-fixed">
	<?php
		$active_menu = $word."_mn";
		$collapse = $word;
		$active_opt = $word."-create";
		include("structure/navbar.php");
		$word_esp = "Subcategoría";
		$word_s = $table;
	?>

	<div id="layoutSidenav">
	  <div id="layoutSidenav_nav">
	    <?php include("structure/menu.php"); ?>
	  </div>
	  <div id="layoutSidenav_content">
	    <main>
	      <div class="container-fluid px-4">
	        <?php include("structure/breadcrumb.php"); ?>

	        <div class="row mt-3">
	        	<div class="col-md-12">
	        		<div class="card">
	        			<div class="card-header">
	        				<i class="fas fa-plus fa-fw"></i>
	        				Creando <?php echo $word_esp; ?>
	        			</div>
	        			<div class="card-body">
	        				<?php
	        					include("../alerts/errors.php");
	        					include("../alerts/success.php");
	        				?>
	        				<form id="form-validation" action="<?php echo $env->APP_URL ?>php/db/requests.php" method="POST" enctype="multipart/form-data">
	        					<input type="hidden" name="request" value="create-<?php echo $word; ?>">
	        					<input type="hidden" name="table" value="<?php echo $word_s; ?>">
	        					<?php
											$row = mysqli_fetch_array($result);
											$edit = false;
	        					?>
	        					<?php include("forms/".$word."-form.php"); ?>
	        					<button type="submit" class="btn btn-success">Registrar</button>
	        				</form>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	      </div>
	    </main>
	    <footer class="py-4 bg-light mt-auto">
	      <?php include("structure/footer.php"); ?>
	    </footer>
	  </div>
	</div>

	<?php include("structure/footer-scripts.php"); ?>

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fa fa-angle-up"></i>
	</a>
	<?php include("widgets/modal.php"); ?>

	<?php include("forms/validations/$collapse.php"); ?>
</body>
</html>
<?php
	} else {
		Redirect::to("login");
	}
?>
