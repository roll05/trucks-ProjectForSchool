<?php
session_start();
include ("konekcija.php");
if(isset($_POST["btnLog"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $errors=[];

    $rePassword="/^[A-z0-9]{8,}$/";
    if(!preg_match($rePassword,$password)){
        array_push($errors,"Uneti parametri ne postoje");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Uneti parametri ne postoje");
    }

    if(count($errors) !=0){
        echo"ima greska";
    }
    else {
//        var_dump("ovde");
        $upit="SELECT * FROM korisnik WHERE email=:email AND password=:password";
        $rez=$konekcija->prepare($upit);
        $md5password=md5($password);
        $rez->bindParam(":email", $email);
        $rez->bindParam(":password", $md5password);


        if($rez->execute()){
            if($rez->rowCount()==1){
                $korisnik=$rez->fetch();

                $_SESSION["korisnikId"]=$korisnik->korisnikId;
                $idd=$korisnik->korisnikId;
                $_SESSION["korisnik"]=$korisnik;

                http_response_code(201);

                if($_SESSION['korisnik']->ulogaId==1){
                   // header("Location: ../dodajKamion.php");


                }
                else {
                   // header("Location: index.php");
                }
            }
            else {
                http_response_code(400);
                echo "Ne postoji ulogovani korisnik sa ovim parametrima";

            }
        }
        else {
            http_response_code(400);
            echo "Upit nije ok";
        }
    }
}