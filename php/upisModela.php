<?php
include ("konekcija.php");

if(isset($_POST['btnUpis'])){
    $model=$_POST['modelNaziv'];
    $opis=$_POST['modelOpis'];
    $boja=$_POST['ddlBoja'];
    $motor=$_POST['ddlMotor'];
    $godina=$_POST['ddlGodina'];
    $menjac=$_POST['ddlMenjac'];
    $pogon=$_POST['ddlPogon'];
    $snaga=$_POST['ddlSnaga'];
    $sasija=$_POST['ddlSasija'];
    $marka=$_POST['ddlMarka'];
    $gorivo=$_POST['ddlGorivo'];

    $errors=[];

    if(empty($model)){
        array_push($errors,"Polje mora biti popunjeno");
    }
    if(empty($opis)){
        array_push($errors,"Polje mora biti popunjeno");
    }
    if($boja=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($motor=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($godina=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($menjac=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($pogon=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($snaga=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($sasija=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($marka=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }
    if($gorivo=="0"){
        array_push($errors,"Polje mora biti Izabrano");
    }

    if(count($errors)==0){
        $upit="INSERT INTO model VALUES ('', :naziv, :marka, :opis, :boja, :godina, :gorivo, :menjac, :motor, :pogon, :snaga, :sasija)";
        $rez=$konekcija->prepare($upit);
        $rez->bindParam(":naziv",$model);
        $rez->bindParam(":marka",$marka);
        $rez->bindParam(":opis",$opis);
        $rez->bindParam(":boja",$boja);
        $rez->bindParam(":godina",$godina);
        $rez->bindParam(":gorivo",$gorivo);
        $rez->bindParam(":menjac",$menjac);
        $rez->bindParam(":motor",$motor);
        $rez->bindParam(":pogon",$pogon);
        $rez->bindParam(":snaga",$snaga);
        $rez->bindParam(":sasija",$sasija);

        $rez->execute();

        if($rez){
            $status=201;
			window.location = "index.php";
        }
        else {
            $status=500;
        }
    }
    else {
        echo"ima greske";
    }

}