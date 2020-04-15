<?php
/*
* template name: futmin
*/
add_action('wp_ajax_update_session', 'update_session');
add_action('wp_ajax_nopriv_update_session', 'update_session');
function update_session () {
	#$vok = update_user_meta(get_current_user_id(), "rangeVolume", $_POST['range_volume']);
	$session_json['test2'] = "FASDASDAS";
	$session_json['test'] = $_POST['userchallenging'];
	header('Content-type: application/json');//CRUCIAL
	echo json_encode($session_json);
}
?>

<html>
<head>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="<?php get_stylesheet_directory_uri()?>/assets/artyom.window.min.js"></script>
	<script src="<?php get_stylesheet_directory_uri()?>/assets/bootstrap.bundle.min.js"></script>
	<link href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript">
		jQuery( document ).ready(function($) {
			ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ) ?>";
			var data = {
				action: 'update_session',
				userchallenging: "Fabio de Arake",
			}
			function load_initial_data() {
				jQuery.post(ajaxurl, data, function(response) {
					console.log("response", response);
				});
			}

			listen_changes = setInterval(function() {
				load_initial_data();
			},5000);
		});
	</script>

	<style type="text/css">
		
	html, body {
		height: 100%;
		margin: 0;
	}

	@font-face {
	    font-family: 'lobster';
	    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.eot');
	    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.eot?#iefix') format('embedded-opentype'),
	         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.woff2') format('woff2'),
	         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.woff') format('woff'),
	         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.ttf') format('truetype'),
	         url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/lobster/lobster_1.3-webfont.svg#lobster_1.3regular') format('svg');
	    font-weight: normal;
	    font-style: normal;

	}

	</style>
	<title>Futnow - F5 Sites</title>
</head>
<body class="grass2">
	<h1 class="hglow">Futnow</h1>
	<div class="col-md-6 offset-md-3 col-sm-12 square-center">
		<?php 
		global $current_user; wp_get_current_user();
		if(!is_user_logged_in()) {
			wp_login_form();
		} else { ?>
			<h2>Profile</h2>
			<?php
			echo get_avatar( $current_user->ID, 32 );
			echo "<p>".$current_user->user_login."</p>";
			?>
			<hr>
			<h3>Challenges</h3>

			<?php
		} ?>
	</div>
	<div class="credits">
		Grass CSS https://codepen.io/JoeHastings/pen/wqXdER
	</div>

<style type="text/css">

h1, h2, h3, h4, h5 {
	font-family: 'lobster', Arial, Helvetica, sans-serif !important;
	text-align:center;
}
.hglow {
	text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18, 2px 2px 1px rgba(99,92,206,0);
}
.square-center {
	text-align: center;
	border-radius: 20px;
	padding: 30px;
	background: #FFF;
}

.credits {
	display: none;
}

.grass2 {
  width: 100%;
  height: 100%;
  background-color: #358626;
}

.grass {
  width: 100%;
  height: 100%;
  background-color: #358626;
}
.grass:before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
  background-image: url('data:image/png;base64, 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');
}
.grass:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  background: repeating-linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) 9.09%, transparent 9.09%, transparent 18.18%);
}

</style>

</body>
</html>