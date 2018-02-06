<!DOCTYPE html>
<html>
<body>
<?php
$voornaam = "Tom";
$achternaam = "Rietkerk";
$adres = "woltersweg";
$huisnummer = "8";
$plaats = "Hengelo";
$leeftijd = "18";
?>
<img src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/1441771/1160/772/m1/fpnw/wm0/detective-avatar-icon-01-.jpg?1468239271&s=81b626a6572cf3817d9c0194c144aa5b" width="100px"/>

<h1><?php echo "Naam: " . $voornaam . " " . $achternaam; ?></h1>
<h2><?php echo "Adres: " . $adres . " " . $huisnummer . " " . $plaats; ?></h2>
<h3><?php echo "Leeftijd: " . $leeftijd; ?></h3>
</body>
</html>
