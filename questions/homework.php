<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--<link rel="stylesheet" type="text/css" href="big-rzhaka/css/materialize.min.css">-->
   <link rel="icon" type="image/ico" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="big-rzhaka/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
	<body>
		<header>
			<div class="up-header">
				<a class="leave" href="https://www.google.com"><img src="big-rzhaka/img/exit.png">Все пака</a>
			</div>
			<div class="banner">
				<img src="big-rzhaka/img/profile.png">
				<h1>Retarded Hedgehog</h1>
			</div>
			<nav>
				<ul class="navigation">
					<li class="nav-element"><a class="nav-link" href="big-rzhaka/index.html">Это</a></li>
					<li class="nav-element"><a class="nav-link" href="homework.php">Просто</a></li>
					<li class="nav-element"><a class="nav-link" >Тест</a></li>
					<li class="nav-element"><a class="nav-link" href="index.php">Камон</a></li>
					<li class="nav-element"><a class="nav-link" href="contacts.php">Типа</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="section">
				<div class="container">
				   <?php
					$numbers = array(array(0,0,0,0,0,0,0,0,0,0),
									 array(0,0,0,0,0,0,0,0,0,0),
									 array(0,0,0,0,0,0,0,0,0,0),
									 array(0,0,0,0,0,0,0,0,0,0),
									 array(0,0,0,0,0,0,0,0,0,0));
					echo '<table class="tg">
							<tr>';
				   		for ($i = 0; $i < 5; $i++){
				        	for ($j = 0; $j < 10; $j++){
				                $numbers[$i][$j] = rand(0, 20);
				                echo '<th class="tg-29b9">'.$numbers[$i][$j].'</th>';
				          	}
				          	echo '</tr>';
				   		}
				   	echo '</table>';
					?>

				   <a class="btn" href="big-rzhaka/index.html">return back</a>
				</div>
		</main>
		<footer>
			<p>Это просто футер</p>
		</footer>
	</body>
</html>
