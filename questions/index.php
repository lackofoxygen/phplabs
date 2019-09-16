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
        <div class="container" style="margin: 100px 0">
			<?php
				//phpinfo();

				for ($x = 0; $x <= 10; $x++) {
			   		echo 'The number is: '.$x.' '; //для того чтобы с одинарными кавычками выводились значения нужна конкатенация.
			   		echo "The number is: $x <br>"; //для двойных кавычек конкатенация не нужна
				}
				echo '<br>';
				$index = 1;
					echo "test ".$index." end of test <br>";

				$days = ["Mon", "Tue", "Wed"];
					echo "I like ".$days[0].", and hate ".$days[1]." and ".$days[2].". <br>";

				echo "Array Length: ".count($days)."<br>";
				$days = ["Mon", "Tue", "Wed"];
				for ($i = 0; $i < count($days); $i++) {
			   		echo $days[$i];
			   		echo "<br>";
			   	}

			   	$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
				echo "Mon start at ".$age['Mon']."<br>";

				foreach($age as $key => $value) {
				   echo "Key=".$key.", Value=".$value;
				   echo "<br>";
				}

			?>
		</div>
	  </div>
    </main>
    <footer>
      <p>Это просто футер</p>
    </footer>
  </body>
</html>
