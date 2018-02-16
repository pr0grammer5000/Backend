<button type="button" onclick='window.location.reload(true);'>Kies random groepslid</button>
<?php

//associative array

$groepsleden = array(
    array(
        'student1' => '0299784',
        'student2' => '0265289',
        'student3' => '0257180',
        'student4' => '0299858',
        'student5' => '0300185',
        'student6' => '0299284',
        'student7' => '0303662'),
    array(
        'student1' => 'Twan' ,
        'student2' => 'Niels',
        'student3' => 'Lorenzo',
        'student4' => 'Emre',
        'student5' => 'Duncan',
        'student6' => 'Mathijs',
        'student7' => 'Tom',),
    array(
        'student1' => 'Natter' ,
        'student2' => 'Klaassen',
        'student3' => 'Peperkamp',
        'student4' => 'Ekmekci',
        'student5' => 'de Jonge',
        'student6' => 'Pattipeilohy',
        'student7' => 'Rietkerk'),
    array(
        'student1' => 'Haaksbergen' ,
        'student2' => 'Oldenzaal',
        'student3' => 'Denekamp',
        'student4' => 'Enschede',
        'student5' => 'Borculo',
        'student6' => 'Tubbergen',
        'student7' => 'Hengelo'),
    array(
        'student1' => '16' ,
        'student2' => '20',
        'student3' => '21',
        'student4' => '17',
        'student5' => '16',
        'student6' => '17',
        'student7' => '18'),
    array(
        'student1' => 'student1',
        'student2' => 'student2',
        'student3' => 'student3',
        'student4' => 'student4',
        'student5' => 'student5',
        'student6' => 'student6',
        'student7' => 'student7'),
);?>

<!--random key picker coen-->

<?php //$random = array_rand($groepsleden[5]);
//    echo $randIndex . "<br>";
//?>

<!--random key picker tom-->

<?php
$random = rand(1,7);
$randomkey = "student" . $random;
echo $randomkey ."<br>";
?>

<!--output-->

<?php
echo "Studentnummer: " . $groepsleden[0][$randomkey] . "<br>";
echo "Voornaam: " . $groepsleden[1][$randomkey] . "<br>";
echo "Achternaam: " . $groepsleden[2][$randomkey] . "<br>";
echo "Woonplaats: " . $groepsleden[3][$randomkey] . "<br>";
echo "Leeftijd: " . $groepsleden[4][$randomkey] . "<br>";
?>