<?php
if(isset($_POST['btnMail'])){
    $ime=$_POST['kontaktIme'];
    $email=$_POST['kontaktEmail'];
    $naslov=$_POST['kontaktNaslov'];
    $poruka=$_POST['kontaktPoruka'];

    $reIme="/^[A-ZĐŠŽĆČ][a-zđšžćč]{2,14}(\s[A-ZĐŠŽĆČ][a-zđšžćč]{2,14})?$/";
    $reNaslov="/^[A-ZĐŠŽĆČ][a-zđšžćč]{2,14}(\s[A-zđšžćč]{2,14})*$/";

    $errors=[];

    if(!preg_match($reIme, $ime)){
        array_push($errors,"Ime nije uneto u dobrom formatu");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email nije unet u dobrom formatu");
    }
    if(!preg_match($reNaslov, $naslov)){
        array_push($errors,"Naslov nije unet u dobrom formatu");
    }
    if(empty($poruka)){
        array_push($errors, "Poruka mora biti uneta");
    }

}