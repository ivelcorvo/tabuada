<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<title>php</title>
		<link rel='stylesheet' type='text/css' href='_css/estilo.css'>
		<meta charset="utf-8">
	</head>
	<body>
		<div class='header'>
			<h1> TABUADA </h1>
		</div>

		<div class='conteiner'>
			<div class='principal'>
				
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
	
			</div>
		</div>
		<div class='footer'>			
		</div>	
	</body>
</html>