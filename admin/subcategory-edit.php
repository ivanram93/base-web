<?php
	require realpath($_SERVER["DOCUMENT_ROOT"])."/"."php/vendor/autoload.php";
  include( realpath($_SERVER["DOCUMENT_ROOT"])."/"."env.php" );
	include( realpath($_SERVER["DOCUMENT_ROOT"])."/php/db/auth.php" );

	$current_pg = "Subcategoría";
	$word = "subcategory";
	$table = "subcategories";
	if( authCheck() && user()->permission==1 ) {
		if( isset($_GET["id"]) ) {
			$id = (int)$_GET["id"];
			if( !validateData( $id, $table ) )
				header("Location: ".$table);
			else {
				$mysqli = conectar_db();
				selecciona_db($mysqli);
				$sql = "SELECT * FROM $table WHERE id=$id";
				$result = consulta_tb($mysqli,$sql);

				$row = mysqli_fetch_array($result);

				if( $row["deleted_at"]!=null ) {
					$_SESSION["error"] = "La categoría con el ID seleccionado está eliminado.";
					header("Location: categories-deleted");
				}
			}
		}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		$title="Editar ".$current_pg;
		$copy_year = date("Y",strtotime("today"));
		include("structure/head.php");
	?>
	<script src="<?php echo $abs_path."/"; ?>assets/js/datatables/jquery.js"></script>
	<script src="<?php echo $abs_path."/"; ?>assets/js/datatables/jquery.dataTables.js"></script>
	<script src="https://cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
	<script src="<?php echo $abs_path."/"; ?>assets/js/validateFormEdit.js"></script>
	<script src="<?php echo $abs_path."/"; ?>assets/js/select-scripts.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<?php
		$active_menu = $word."_mn";
		$collapse = $word;
		$active_opt = $word."-view";
		include("structure/navbar.php");
	?>

	<div class="content-wrapper">
		<div class="contianer-fluid">
			<div class="container-fluid">
				<div class="row mt-3">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header bg-blue text-white">
								<i class="fa fa-fw fa-pencil-square-o"></i>
								Editando <?php echo $current_pg; ?>
							</div>
							<div class="card-body">
								<form action="<?php echo $abs_path."/"; ?>../php/db/requests.php" method="POST">
									<input type="hidden" name="request" value="update-<?php echo $word; ?>">
									<input type="hidden" name="which" value="<?php echo $_GET["id"]; ?>">
									<?php
										$edit = true;
										include("forms/".$word."-form.php");
									?>
									<button type="submit" class="btn btn-success">Actualizar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("structure/footer.php"); ?>

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fa fa-angle-up"></i>
	</a>
	<?php include("widgets/modal.php"); ?>
	<script> CKEDITOR.replace( 'body' ); </script>
</body>
</html>
<?php
	} else {
		header("Location: login");
	}
?>