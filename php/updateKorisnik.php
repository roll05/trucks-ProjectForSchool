<?php include ("konekcija.php");
if(isset($_POST['id'])){
    $id=$_GET['id'];
    $poljeId=$_POST[$id];

    var_dump($poljeId);
}