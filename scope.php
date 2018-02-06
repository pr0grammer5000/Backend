<!DOCTYPE html>
<html>
<body>
<?php
$global = "1";
function local() {
    echo "1";
}
?>

<p><?php echo "Het verschil tussen globale en lokale variabelen is dat globale variabelen vanaf overal in de code
kan worden opgehaald en veranderd en lokale variabelen kunnen alleen binnen een gegeven deel van de code worden opgehaald
en veranderd. Het volgende voorbeeld laat een globale en een lokale variabele waarde zien: "?></p>
<p><?php echo "$global"; ?></p>
<p><?php local(); ?></p>

<p><?php echo "Omdat de eerste een globale variabele is kan je hem nu aanpassen. De tweede waarde is niet veranderd omdat het
een lokale variabale is. Als je toch probeert local te veranderen krijg je een error."?></p>

<?php
$global = "5";
?>

<p><?php echo "$global"; ?></p>
<p><?php local(); ?></p>

</body>
</html>