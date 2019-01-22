<?php
/**
* template name: robonoia
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

#get_header(); ?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/artyom.window.min.js"></script>
<script type="text/javascript">
	
	//jQuery.ready(function($){
	//jQuery.ready
	//$( document ).ready(function() {
		var Artyom;
		var artyom_voice;
		var grupoDeComandos = [{
			   indexes:["iniciar", "focar", "começar", "interromper"], // These spoken words will trigger the execution of the command
			    action:function(){ // Action to be executed when a index match with spoken word
			        artyom_voice.say("Pois não");//era: comando recebido
			        //action_button();
			    }
			}];
			alert("reade");
		//var artyom_voice;
		//i//f(artyom_voice!=undefined && volumeLevel>1 )
			//	artyom_voice.initialize({volume:volumeLevel/100});
		startContinuousArtyom();
		function startContinuousArtyom(){
			alert("startContinuousArtyom"+typeof Artyom);
			setTimeout(function(){// if you use artyom.fatality , wait 250 ms to 
    
				if (typeof Artyom != "undefined") {
					//alert("undefined");
					artyom_voice = new Artyom();
					//
				    artyom_voice.fatality();// use this to stop any of
				    //
				    //a.lert(data_from_php.php_locale);
				    //a.lert(artyom_lang);
				    //
				    //setTimeout(function(){// if you use artyom.fatality , wait 250 ms to initialize again.

				         artyom_voice.initialize({
				            lang:"pt-PT",// A lot of languages are supported. Read the docs !
				            continuous:true,// Artyom will listen forever
				            //listen:true, // Start recognizing
				            debug:true, // Show everything in the console
				            speed:1, // talk normally
				            volume: 100,
				            //volume: 0,
				            //name: "robo",
				        }).then(function(){
				            console.log("Ready to work !");
				        });
				    //},250);
				    //
				    //if(data_from_php.php_locale=="pt_BR")
				    	//artyom_voice.addCommands(grupoDeComandos);
				    //else
				    artyom_voice.addCommands(grupoDeComandos);

				    /*artyom_voice.when("COMMAND_RECOGNITION_END",function(status){
					          startContinuousArtyom();
					   
					});
					artyom_voice.when("SPEECH_SYNTHESIS_END",function(){
					          startContinuousArtyom();
					    
					});*/
				}
			},250);	
		}

	//});
</script>
</head>
<body>
<?php
echo get_bloginfo("stylesheet_directory")."/assets/jquery-3.3.1.min.js";
wp_enqueue_script("jquery33", get_bloginfo("stylesheet_directory")."/assets/jquery-3.3.1.min.js");

var_dump(wp_enqueue_script("artyom-js", get_bloginfo("stylesheet_directory")."/assets/artyom.window.min.js"));
var_dump(wp_enqueue_script("artyom-js"));
?>
	<div id="primary" class="content-area22">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</body>
<?php
#do_action( 'storefront_sidebar' );
//get_footer();
