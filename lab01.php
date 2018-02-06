<!DOCTYPE html>
<html>
<body>
<?php
$breedte = 10;
$lengte = 11;
$hoogte = 5;
$oppervlakte = $lengte * $breedte;
$volume = $lengte * $breedte * $hoogte;
?>
<p><?php echo "Containeroppervlakte is " . $oppervlakte; ?></p>
<p><?php echo "Containervolume is " . $volume; ?></p>
</body>
</html>
