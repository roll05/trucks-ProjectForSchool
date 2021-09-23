<?php
include ("konekcija.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];


    $upit="DELETE FROM slika WHERE slikaId = :id";
    $rez=$konekcija->prepare($upit);
    $rez->bindParam(":id",$id);
    $rez->execute();
     if($rez){
         header("Location: ../index.php");
     }
     else {
         echo "Greska prilikom brisanja";
     }


}