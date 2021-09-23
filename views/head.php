<?php session_start();
include ("php/konekcija.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Truck shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/media.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <div class="container">
            <div class="row">
                <div class="col-lg-6" id="logo">
                   <a href="index.php"> <img src="images/logo1.png" alt="Truck Shop"> </a>
                </div>
                <div class="col-lg-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="btn">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="mainMenu">
                        <li class="nav-item active">
                        <a class="nav-link" href="o-nama.php">O nama</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kamioni</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="man.php">MAN</a>
                                <a class="dropdown-item" href="scania.php">SCANIA</a>
                                <a class="dropdown-item" href="volvo.php">VOLVO</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="o-autoru.php">O autoru</a>
                        </li>
                        <?php if(!isset($_SESSION['korisnik'])):?>
                        <li class="nav-item" id="draw">
                            <a class="nav-link" href="registracija.php">Prijavi se / Registruj se</a>
                        </li>
                        <?php endif; ?>
                        <?php if(isset($_SESSION['korisnik'])):?>
                            <li class="nav-item" id="draw">
                                <a class="nav-link" href="php/logout.php">Odjavi se</a>
                            </li>
                            <li class="nav-item pt-2 pl-1">
                                <?php

                                                $upit = "SELECT ime, prezime FROM korisnik WHERE korisnikId = :idKorisnik";
                                                $priprema = $konekcija->prepare($upit);

                                                $id = $_SESSION['korisnikId'];

                                                $priprema->bindParam(':idKorisnik',$id);

                                                $rez = $priprema->execute();

                                                if($rez){
                                                $korisnik = $priprema->fetch();
                                                echo $korisnik->ime. " " . $korisnik->prezime;
                                    }
                                                ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                    </div>
                </nav>
            </div>
            </div>
                <?php if(isset($_SESSION['korisnik'])):
                if($_SESSION['korisnik']->ulogaId==1):?>
                <div class="row border-top">
                    <nav class="nav ml-5">
                        <a class="nav-link kontaktMail" href="dodajKamion.php">Dodaj kamion</a>
                        <a class="nav-link kontaktMail" href="korisnici.php">Korisnici</a>
                    </nav>
                </div>
                <?php endif;?>
                <?php endif;?>
            </div>
        </header>