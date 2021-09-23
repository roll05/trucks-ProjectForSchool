<?php
include ("konekcija.php");

$upit="SELECT * FROM menu";
$rez=$konekcija->query($upit);
foreach($rez as $item):?>

<?php endforeach;?>
