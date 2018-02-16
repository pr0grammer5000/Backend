<button type="button" onclick='window.location.reload(true);'>Nieuwe kaart</button>
<p>
    <?php
    $kleuren = array("ruiten", "harten", "klaveren", "schoppen");
    $waarden = array("boer", "vrouw", "heer", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $randomkleur = (rand(0, 3));
    $randomwaarde = (rand(0, 11));
    ?>
    <?php echo $kleuren[$randomkleur];?><br>
    <?php echo $waarden[$randomwaarde];?><br>

    <?php
    $image = $kleuren[$randomkleur] . "_" . $waarden[$randomwaarde] . ".svg";?><br>
    <?php
    echo "<img src=".$image.">";
    ?>
</p>
