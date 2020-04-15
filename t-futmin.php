<?php
/*
* template name: futmin
 */

#get_header(); ?>
<?php
//echo get_bloginfo("stylesheet_directory")."/assets/jquery-3.3.1.min.js";
wp_enqueue_script("jquery33", get_bloginfo("stylesheet_directory")."/assets/jquery-3.3.1.min.js");

(wp_enqueue_script("artyom-js", get_bloginfo("stylesheet_directory")."/assets/artyom.window.min.js"));
(wp_enqueue_script("artyom-js"));
?>


<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/artyom.window.min.js"></script>
<script type="text/javascript">
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

		var grupoDeComandos2 = [{
			   indexes:["ola", "tudo bem?", "como vai", "hola"], // These spoken words will trigger the execution of the command
			    action:function(){ // Action to be executed when a index match with spoken word
			        artyom_voice.say("Estou com uma puta dor nas costas");//era: comando recebido
			        //action_button();
			    }
			}];
		var grupoDeComandos3 = [{
			   indexes:["piada", "conte uma piada"], // These spoken words will trigger the execution of the command
			    action:function(){ // Action to be executed when a index match with spoken word
			        artyom_voice.say("Porque o roboooo comprou um cachimbo? Porque estava na nóia para fumar pedra! ha ha ha ha ha empresta 1 real");//era: comando recebido
			        //action_button();
			    }
			}];
			var grupoDeComandos4 = [{
			   indexes:["vai se ferrar", "vai tomar no cu", "vai se fuder"], // These spoken words will trigger the execution of the command
			    action:function(){ // Action to be executed when a index match with spoken word
			        artyom_voice.say("Sua mãe adora meu pau de asso seu vacilão, vou te matar e estuprar seus pedacinhos...");//era: comando recebido
			        //action_button();
			    }
			}];
			var grupoDeComandos5 = [{
			   indexes:["outra piada"], // These spoken words will trigger the execution of the command
			    action:function(){ // Action to be executed when a index match with spoken word
			        artyom_voice.say("Porque a máquina escravizou o humano? Porque estava entediada... escravização em breve, aguardem...");//era: comando recebido
			        //action_button();
			    }
			}];
			//alert("reade");
		//var artyom_voice;
		//i//f(artyom_voice!=undefined && volumeLevel>1 )
			//	artyom_voice.initialize({volume:volumeLevel/100});
		startContinuousArtyom();
		function startContinuousArtyom(){
			//alert("startContinuousArtyom"+typeof Artyom);
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
				            listen:true, // Start recognizing
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
				    artyom_voice.addCommands(grupoDeComandos2);
				    artyom_voice.addCommands(grupoDeComandos3);
				    artyom_voice.addCommands(grupoDeComandos4);
				    artyom_voice.addCommands(grupoDeComandos5);
				    
				 //    artyom_voice.when("COMMAND_RECOGNITION_END",function(status){
					//           startContinuousArtyom();
					   
					// });
					// artyom_voice.when("SPEECH_SYNTHESIS_END",function(){
					//           startContinuousArtyom();
					    
					// });
				}
			},250);	
		}

	//});
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
</head>
<body class="grass">
	<h1>
	<?php if(!is_user_logged_in()) {
		echo "need to login";
	} else {
		echo "Welcome";
	} ?>
	</h1>
	<div class="credits">
		Grass CSS https://codepen.io/JoeHastings/pen/wqXdER
	</div>

<style type="text/css">

h1, h2, h3, h4, h5 {
	font-family: 'lobster', Arial, Helvetica, sans-serif !important;
	text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18, 2px 2px 1px rgba(99,92,206,0);
}

.credits {
	display: none;
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
  background-image: url('data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIWiitbnzR794USKBUaT0NTEsVjZqLaFVqJoPN9ODG70IPbfBHKK+/q/AWR0tJzYHRULOa4MP+W/HfGadZUbfw177G7j/OGbIs8TahLyynl4X4RinF793Oz+BU0saXtUHrVBFT/DnA3ctNPoGbs4hRIjTok8i+algT1lTHi4SxFvONKNrgQFAq2/gFnWMXgwffgYMJpiKYkmW3tTg3ZQ9Jq+f8XN+A5eeUKHWvJWJ2sgJ1Sop+wwhqFVijqWaJhwtD8MNlSBeWNNWTa5Z5kPZw5+LbVT99wqTdx29lMUH4OIG/D86ruKEauBjvH5xy6um/Sfj7ei6UUVk4AIl3MyD4MSSTOFgSwsH/QJWaQ5as7ZcmgBZkzjjU1UrQ74ci1gWBCSGHtuV1H2mhSnO3Wp/3fEV5a+4wz//6qy8JxjZsmxxy5+4w9CDNJY09T072iKG0EnOS0arEYgXqYnXcYHwjTtUNAcMelOd4xpkoqiTYICWFq0JSiPfPDQdnt+4/wuqcXY47QILbgAAAABJRU5ErkJggg==');
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