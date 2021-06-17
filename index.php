<?php 

  require_once __DIR__ . './class/Movie.php' ;

  $film1 = new Movie("abc","action","c'era una volta abc","1,30,00");

  $film1->setPrezzo("10");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Titolo: <?php echo $film1->titolo  ?></h1>
  <h1>Genere: <?php echo $film1->genere  ?></h1>
  <h1>Trama: <?php echo $film1->trama  ?></h1>
  <h1>Durata: <?php echo $film1->durata  ?></h1>
  <h1>Prezzo: <?php echo $film1->getPrezzo()  ?></h1>
</body>
</html>