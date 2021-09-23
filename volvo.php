<?php include("views/head.php");?>
<div style="text-align:center;">
    <img src="images/volvo/volvoCover.png" class="img-fluid" alt="Volvo">
</div>
<main class="container">
    <h1 class="naslov"> VOLVO </h1>
    <hr class="hrNaslov"/>
    <div class="row">
        <?php
        $strana=0;

        if(isset($_GET['strana'])) {
            $strana = ($_GET['strana'] - 1) * 8;
        }
        $upit="SELECT * FROM model as m INNER JOIN slika as s ON m.modelId=s.modelId WHERE m.markaId=3 limit $strana, 8";
        $rez=$konekcija->query($upit)->fetchAll();

        foreach($rez as $model):
            ?>
            <div class="col-md-3 p-1" id="izdvojeno">
                <div class="img">
                    <img src="<?=$model->Putanja?>" alt="<?=$model->Alt?>">
                </div>
                <div class="description">
                    <h5 class="model"><?=$model->Naziv?></h5>
                    <?php $opis=$model->Opis;
                    $sub=substr($opis,0,150);
                    ?>
                    <p><?=$sub." ..."?></p>
                </div>
                <div class="row">
                    <a href="kamion.php?id=<?=$model->modelId?>" class="procitajVise ml-4 pt-1">Progledaj više</a>
                    <?php if(isset($_SESSION['korisnik'])):
                        if($_SESSION['korisnik']->ulogaId==1):?>
                            <div class="mr-3 p-2">
                                <?php include("php/delete.php")?>
                                <a href="php/update.php?id=<?=$model->modelId?>"  title="Uredi post" class="kontaktMail update"><i class="fa fa-edit" style="font-size:24px"></i></a>
                                <a href="php/delete.php?id=<?=$model->slikaId?>" title="Izbriši post" class="kontaktMail delete"><i class="fa fa-trash-o" style="font-size:24px" name="delete" id="delete"></i></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <hr class="hrNaslov"/>
    <div class="row m-0 p-0">
        <div class="col-md-1">
            <ul class="pagination pagination-lg">
                <?php
                $upit = "SELECT COUNT(*) AS brPrikaza FROM model as m INNER JOIN slika as s ON m.modelId=s.modelId WHERE m.markaId=3";
                $rez = $konekcija->query($upit)->fetch();

                $brPrikaza = $rez->brPrikaza;


                $brLinkova = ceil($brPrikaza / 8);

                for($i=1; $i <= $brLinkova; $i++):
                    ?>
                    <li class="page-item"><a class="page-link" href="scania.php?strana=<?= $i?>" style="color:#222"><?= $i ?></a></li>
                <?php endfor;?>
            </ul>
        </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
</main>
<?php include ("views/footer.php");?>
