<?php include("views/head.php");
$id=$_GET['id'];
$upit="SELECT * FROM model m INNER JOIN slika s ON m.modelId=s.modelId
                             INNER JOIN pogon p ON m.pogonId=p.pogonId
                             INNER JOIN menjac  ON m.menjacId=menjac.menjacId
                             INNER JOIN gorivo g ON m.gorivoId=g.gorivoId
                             INNER JOIN godina  ON m.godinaId=godina.godinaId
                             INNER JOIN visinasasije vs ON m.sasijaId=vs.visinaId
                             INNER JOIN motor ON m.motorId=motor.motorId
                             INNER JOIN snaga ON m.snagaId=snaga.snagaId
                             INNER JOIN boja b ON m.bojaId=b.bojaId
                             WHERE m.modelId=$id";
$rez=$konekcija->query($upit)->fetchAll();
foreach($rez as $model):
?>
<div>
    <img src="images/man/manCover.png" class="img-fluid" alt="Kontakt">
</div>
<main class="container">
    <h1 class="naslov"> <?=$model->Naziv?> </h1>
    <hr class="hrNaslov"/>
    <div class="row">
        <div class="col-md-6">
                <img src="<?=$model->Putanja?>" alt="<?=$model->Alt?>">
            </div>
        <div class="col-md-6">
            <h5> Anketa </h5>
            <hr class="hrNaslov"/>
            <form>
                <h6>Ko je Vaš favorit?</h6>
                <fieldset class="form-group">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                <label class="form-check-label" for="gridRadios1">
                                    MAN
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    SCANIA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    VOLVO
                                </label>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
        <h3> Opis </h3>
        <hr class="hrNaslov"/>
    <div class="row">
        <div class="col-lg-6 m-auto">
            <p class="text-justify"><?=$model->Opis?></p>
        </div>
        <div class="imgDescription" class="col-md-5 p-auto">
            <img src="images/team1.png" alt="Truck Shop - O nama">
        </div>
    </div>
    <h3> Karakteristike </h3>
    <hr class="hrNaslov"/>
    <div class="container">
        <table class="table table-striped">
            <thead>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Boja</th>
                <td><?=$model->Boja?></td>
                <th scope="row">Visina šasije</th>
                <td><?=$model->Visina?></td>
            </tr>
            <tr>
                <th scope="row">Emiosiona klasa motora</th>
                <td><?=$model->Motor?></td>
                <th scope="row">Snaga (kw/ks)</th>
                <td><?=$model->Vrednost?></td>
            </tr>
            <tr>
                <th scope="row">Menjač</th>
                <td><?=$model->Menjac?></td>
                <th scope="row">Godina proizvodnje</th>
                <td><?=$model->Godina?></td>
            </tr>
            <tr>
                <th scope="row">Pogon</th>
                <td><?=$model->Pogon?></td>
                <th scope="row">Gorivo</th>
                <td><?=$model->Gorivo?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <h3> Komentari </h3>
    <hr class="hrNaslov"/>
    <div claa="container">
        <?php if(!isset($_SESSION["korisnik"])): ?>
        <div class="row">
            <p> Za ostavljanje komentara morate biti <a href="registracija.php" class="kontaktMail">ulogovani</a> . </p>
        </div>
        <?php endif; ?>
        <?php if(isset($_SESSION["korisnik"])):
            if($_SESSION['korisnik']->ulogaId==1 || $_SESSION['korisnik']->ulogaId==2):?>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <div class="form-group">
                <form method="post" action="php/komentar.php">
                    <div class="form-row">
                        <input type="hidden" name="model" value="<?=$id?>"/>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3" placeholder="Vaš komentar..."></textarea>
                    </div>
                    <div class="form-row">
                        <input type="submit" class="btn btn-secondary" id="btnKomentar" name="btnKomentar" value="Pošalji komentar">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php
        $upit="SELECT * FROM komentar k INNER JOIN korisnik kor ON k.korisnikId=kor.korisnikId 
                                        WHERE modelId=$id";
        $rez=$konekcija->query($upit)->fetchAll();
        foreach ($rez as $item) :
        ?>
        <div class="row mb-3">
            <div class="col-md-3">
                <table>
                    <tr>
                        <td><?=$item->ime?></td>
                        <td><?=$item->prezime?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?=$item->Datum?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-9 komentar border border-secondary rounded">
                <div class="col pt-2">
                            <p><?=$item->Komentar?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</main>
<?php include ("views/footer.php");
endforeach; ?>