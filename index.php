<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<meta charset="utf-8">
		<meta name='author' content='Levi Alves'>
		<meta name='description' content='aprendendo php'>
		<meta name='robots' content='index, nofollow'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta http-equiv='X-UA-Compatible' name='ie=edige'>
		<title>php</title>
		<link rel='stylesheet' type='text/css' href='_css/estilo.css'>		
	</head>
	<body>
		<header>
			<h1> TABUADA </h1>
		</header>

		<div class='conteiner'>
			<section class='principal'>
				
				<?php
					echo"<div class='bloco'>";
						for($x=1;$x<=10;$x++){
							echo"<div class='blocos'>";
								for($y=1;$y<=10;$y++){
									$r = $x*$y;
									printf('%d x %d = %d', $x, $y, $r);
									echo'</br>';										
								}
							echo"</div>";
							echo'</br>';
						}
					echo"</div>";	
				?>
	
			</section>
		</div>
		<footer>			
		</footer>	
	</body>
</html>