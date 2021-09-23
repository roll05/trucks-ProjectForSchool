<?php session_start();
include "konekcija.php";
$mesto = "htdoc/images/";
if(isset($_POST['btnUpisiSliku'])) {
        $alt = $_POST['alt'];
        $model=$_POST['ddlModelSlika'];
        $slika=$_FILES['fSlika'];
        $ime=$_FILES['fSlika']['name'];
        $tip=$_FILES['fSlika']['type'];
        $velicina=$_FILES['fSlika']['size'];
        $tmpPutanja=$_FILES['fSlika']['tmp_name'];
		$marka = $_POST['ddlMarkaSlika'];


		
//        var_dump($slika);
        $errors=[];

        if($model=="0"){
            array_push($errors,"Polje mora biti Izabrano");
        }
        if(empty($alt)){
            array_push($errors,"Polje mora biti popunjeno");
        }

        $formati=array("image/jpg", "image/jpeg", "image/png");

        if(!in_array($tip, $formati)){
            array_push($errors, "Tip fajla mora biti (jpg/jpeg/png)");
        }
        if(!$velicina>3000000){
            array_push($errors, "Fajl mora biti manje od 3MB");
        }

        if(count($errors)==0) {
		
            $filePath = $mesto . $ime;
			$result = move_uploaded_file($tmpPutanja, $filePath);
                $upit = "INSERT INTO slika values ('', :putanja, :alt, :model)";
                $rez = $konekcija->prepare($upit);
                $rez->bindParam(':putanja', $image);
                $rez->bindParam(':alt', $alt);
                $rez->bindParam(':model', $model);

                try {
                    $rez->execute();
                    if ($rez) {
                    header("Location: ../dodajKamion.php");
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

            }
        }
	}
}