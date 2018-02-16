<button type="button" onclick='window.location.reload(true);'>Roll the dice!</button>
<p>
    <?php $dobbel = array(rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6));
    echo "U heeft gerold: ";?><br>
    <?php echo $dobbel[0];?><br>
    <?php echo $dobbel[1];?><br>
    <?php echo $dobbel[2];?><br>
    <?php echo $dobbel[3];?><br>
    <?php echo $dobbel[4];?><br>
</p>
<p>
<?php $totaal = array_sum($dobbel);
    echo "Dat is samen " . $totaal . ".";?></p>
