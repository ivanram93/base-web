<?php
	ini_set('display_errors', 'Off');
	$rcpublic = "6LdZHooUAAAAAJu58OM6OwfGCM05uJ-exyjWE2BE";
	session_start();
	$_SESSION["recaptcha"] = "v3";
	// $_SESSION["recaptcha"] = "v2";

	$root = realpath($_SERVER["DOCUMENT_ROOT"])."/";

	require $root."php/vendor/autoload.php";


	/**
	 * Code to make absoulute paths (example: http://www.domain-name.com/assets/img/img_name.jpg);
	 */
	$path = (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'];
	/**
	 * Optimized code to work on local with virtualhosts or localhost or production server
	 */
	$path = (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'];

	$app_name = "base-b4";
	switch( $path ) {
		case "http://localhost":
			$path .= "/".$app_name."/";
			break;

		case "http://fabricadesoluciones.info":
			$path .= "/".$app_name."/";
			break;

		default:
			$path .= "/";
			break;
	}
  // $path = $_SERVER['HTTP_HOST'] == 'localhost:8888' ? '/fabricadesoluciones.com/' : '';

	function fileTime( $asset_path ) {
		global $path;
		$file = filemtime($asset_path);
		$asset = $path.$asset_path."?".$file;

		return $asset;
	}
?>
<link rel="shortcut icon" href="http://placehold.it/32.png"/>
<meta charset="UTF-8">
<title> <?php echo $view_name; ?> | site_name </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php /* CSS Tags */ ?>
<?php /*Bootstrap css minified*/ ?>
<link rel="stylesheet" href="<?php echo fileTime("assets/css/bootstrap/bootstrap.min.css"); ?>">
<?php /*Style Font Awesome*/ ?>
<link rel="stylesheet" href="<?php echo fileTime("assets/css/fontawesome/all.min.css"); ?>">
<link rel="stylesheet" href="<?php echo fileTime("assets/css/fontawesome/svg-with-js.min.css"); ?>">
<?php /*Style Core*/ ?>
<link rel="stylesheet" href="<?php echo fileTime("assets/css/core.css"); ?>">
<?php /*Style Custom*/ ?>
<link rel="stylesheet" href="<?php echo fileTime("assets/css/custom.css"); ?>">

<?php /* JS Tags */ ?>
<?php /*jQuery js minified*/ ?>
<script src="<?php echo fileTime("assets/js/jquery/jquery.min.js"); ?>"></script>
<?php /*jQuery UI*/ ?>
<script src="<?php echo fileTime("assets/js/jquery/jquery-ui.min.js"); ?>"></script>
<?php /*Bootstrap js minified*/ ?>
<script src="<?php echo fileTime("assets/js/bootstrap/popper.min.js") ?>"></script>
<script src="<?php echo fileTime("assets/js/bootstrap/bootstrap.min.js"); ?>"></script>
<?php /*Script Font Awesome*/ ?>
<script src="<?php echo fileTime("assets/js/fontawesome/all.min.js") ?>"></script>
<?php /*Scroll reveal*/ ?>
<script src="<?php echo fileTime("assets/js/scrollreveal/scrollreveal.min.js"); ?>"></script>
<?php /*Scroll Magic*/ ?>
<script src="<?php echo fileTime("assets/js/scrollmagic/TweenMax.min.js"); ?>"></script>
<script src="<?php echo fileTime("assets/js/scrollmagic/ScrollMagic.min.js"); ?>"></script>
<script src="<?php echo fileTime("assets/js/scrollmagic/animation.gsap.js"); ?>"></script>
<script src="<?php echo fileTime("assets/js/scrollmagic/debug.addIndicators.js"); ?>"></script>
<?php /*Script Scrollify*/ ?>
<script src="<?php echo fileTime("assets/js/scrollify/jquery.scrollify.min.js"); ?>"></script>
<?php /*Script custom*/ ?>
<script src="<?php echo fileTime("assets/js/script.js"); ?>"></script>
<script src="<?php echo fileTime("assets/js/img-to-svg.js"); ?>"></script>
<?php /*reCaptcha*/ ?>
<?php if( $_SESSION["recaptcha"]=="v3" ) { ?>
<script src='https://www.google.com/recaptcha/api.js?render=<?php echo $rcpublic; ?>'></script>
<?php } ?>
<script>
	var direction = "<?php echo $path; ?>";
	var recaptcha = "<?php echo $_SESSION["recaptcha"]; ?>";
</script>
