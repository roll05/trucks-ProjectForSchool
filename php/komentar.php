<?php
session_start();
include ("konekcija.php");
if(isset($_SESSION['korisnik'])){

if(isset($_POST['btnKomentar'])) {
    $komentar = $_POST['komentar'];
    $id = $_SESSION['korisnikId'];
    $date = date("d/m/y");
    $model = $_POST["model"];


    if(!empty($komentar)){
        $upit="INSERT INTO komentar VALUES ('', :komentar, :datum, :korisnik, :model)";
        $rez=$konekcija->prepare($upit);
        $rez->bindParam(":komentar", $komentar);
        $rez->bindParam(":datum", $date);
        $rez->bindParam(":korisnik", $id);
        $rez->bindParam(":model", $model);

        $rez->execute();

        if($rez){
            $status=201;
            header("Location: ../kamion.php?id=$model");
        }
        else {
            $status=500;
        }
    }
}}