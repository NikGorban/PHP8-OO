<?php
declare(strict_types=1);
include "LaVoiture.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constructeur</title>
</head>
<body>
<h1>Constructeur</h1>
<p>La méthode public __construct() est méthode magique permettant de passer des arguments lors de l'instanciation d'une classe.</p>
<?php
if(LaVoiture::VOITURE_NEUVE===true){
    echo "<h2>Voitures neuves</h2>";
}

$car1 = new LaVoiture("Mercedes",2007, 200,"Model 1");
$car2 = new LaVoiture("Volvo",2015, 162,"Model 2");
$car3 = new LaVoiture();

// constante privée
//echo LaVoiture::MOTORISATION;
var_dump($car1,$car2, $car3);
?>
</body>
</html>
