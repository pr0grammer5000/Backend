<?php
$eredivisie = array(
        array(
            'Plaats' => '1',
            'Naam' => 'FC Twente',
            'Stad' => 'Enschede',
            'Gespeeld' => '21',
            'Gewonnen' => '18',
            'Gelijk' => '1',
            'Verloren' => '1'),
        array('Plaats' => '2',
            'Naam' => 'Heracles',
            'Stad' => 'Almelo',
            'Gespeeld' => '21',
            'Gewonnen' => '15',
            'Gelijk' => '3',
            'Verloren' => '3'),
);

echo "Plaats: " . $eredivisie[0]['Plaats'] . "<br>";
echo "Naam: " . $eredivisie[0]['Naam'] . "<br>";
echo "Stad: " . $eredivisie[0]['Stad'] . "<br>";
echo "Gespeeld: " . $eredivisie[0]['Gespeeld'] . "<br>";
echo "Gewonnen: " . $eredivisie[0]['Gewonnen'] . "<br>";
echo "Gelijk: " . $eredivisie[0]['Gelijk'] . "<br>";
echo "Verloren: " . $eredivisie[0]['Verloren'] . "<br><br>";

echo "Plaats: " . $eredivisie[1]['Plaats'] . "<br>";
echo "Naam: " . $eredivisie[1]['Naam'] . "<br>";
echo "Stad: " . $eredivisie[1]['Stad'] . "<br>";
echo "Gespeeld: " . $eredivisie[1]['Gespeeld'] . "<br>";
echo "Gewonnen: " . $eredivisie[1]['Gewonnen'] . "<br>";
echo "Gelijk: " . $eredivisie[1]['Gelijk'] . "<br>";
echo "Verloren: " . $eredivisie[1]['Verloren'];
?>