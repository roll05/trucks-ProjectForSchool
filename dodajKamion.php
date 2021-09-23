<?php include("views/head.php");
    if(isset($_SESSION['korisnik'])){
        if($_SESSION['korisnik']->ulogaId != 1){
            header("Location: index.php");
        }
    }
    else {
        $_SESSION['greska'] ="Niste ulogovani!";
        header("Location: index.php");
    }
?>
<div>
    <img src="images/scaniaCover.png" class="img-fluid" alt="Scania">
</div>
<main class="container">
    <div class="row">
        <h1 class="naslov">Dodaj kamion</h1>
    </div>
    <hr class="hrNaslov"/>
    <div class="container">
        <div class="row">
    <div class="col-md-7 border border-sencondary rounded">
        <h3>Dodaj model</h3>
        <hr/>
        <div>
            <label class="label"> * Sva polja su obavezna </label>
        </div>
    <form method="post" action = "php/upisModela.php">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                <label class="ml-0"> Naziv modela</label>
                <input type="text" class="form-control" id="modelNaziv" name="modelNaziv">
                </div>
                <div class="col-md-3">
                    <label>Marka</label>
                    <select class="form-control" id="ddlMarka" name="ddlMarka">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM marka";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->markaId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                <label class="ml-0"> Opis </label>
                <textarea class="form-control" id="modelOpis" name="modelOpis" rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>Boja</label>
                    <select class="form-control" id="ddlBoja" name="ddlBoja">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM boja";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                        <option value="<?=$item->bojaId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Emisiona klasa</label>
                    <select class="form-control" id="ddlMotor" name="ddlMotor">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM motor";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->motorId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Godina</label>
                    <select class="form-control" id="ddlGodina" name="ddlGodina">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM godina";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->godinaId?>"><?=$item->Godina?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Menjač</label>
                    <select class="form-control" id="ddlMenjac" name="ddlMenjac">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM menjac";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->menjacId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>Pogon</label>
                    <select class="form-control" id="ddlPogon" name="ddlPogon">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM pogon";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->pogonId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Snaga (kw/ks)</label>
                    <select class="form-control" id="ddlSnaga" name="ddlSnaga">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM snaga";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->snagaId?>"><?=$item->Vrednost?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Visina šasije</label>
                    <select class="form-control" id="ddlSasija" name="ddlSasija">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM visinasasije";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->visinaId?>"><?=$item->Visina?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Gorivo</label>
                    <select class="form-control" id="ddlGorivo" name="ddlGorivo">
                        <option selected>Izaberi...</option>
                        <?php
                        $upit="SELECT * FROM gorivo";
                        $rez=$konekcija->query($upit)->fetchAll();
                        foreach ($rez as $item):?>
                            <option value="<?=$item->gorivoId?>"><?=$item->Naziv?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="col">
            <input type="submit" class="btn btn-secondary" id="btnUpis" name="btnUpis" value="Upiši"/>
            </div>
        </div>
    </form>
        <div class="form-row" id="dodatnoPoljeUpis">

        </div>
    </div>
            <div class="col-md-4 border border-sencondary rounded">
                <h3>Dodaj sliku</h3>
            <hr/>
                <div>
                    <label class="label"> * Sva polja su obavezna </label>
                </div>
                    <form method="post" action="php/uploadSlike.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Dodaj sliku</label>
                            <input type="file" name="fSlika" class="form-control-file"/>
                        </div>
                        <div class="form-group">
                            <label>Model koji je na slici</label>
                            <input type="text" class="form-control" name="alt" id="alt">
                        </div>
						<div class="form-row">
                            <div class="col">
                            <label class="ml-0">Marka</label>
                            <select class="form-control" id="ddlMarkaSlika" name="ddlMarkaSlika">
                                <option selected>Izaberi...</option>
                                <?php
                                $upit="SELECT * FROM marka";
                                $rez=$konekcija->query($upit)->fetchAll();
                                foreach ($rez as $item):?>
                                    <option value="<?=$item->markaId?>"><?=$item->Naziv?></option>
                                <?php endforeach;?>
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                            <label class="ml-0">Model</label>
                            <select class="form-control" id="ddlModelSlika" name="ddlModelSlika">
                                <option selected>Izaberi...</option>
                                <?php
                                $upit="SELECT * FROM model";
                                $rez=$konekcija->query($upit)->fetchAll();
                                foreach ($rez as $item):?>
                                    <option value="<?=$item->modelId?>"><?=$item->Naziv?></option>
                                <?php endforeach;?>
                            </select>
                            </div>
                        </div>
						
                        <div class="form-row">
                            <div class="col">
                            <input type="submit" class="btn btn-secondary" name="btnUpisiSliku" id="btnUpisiSliku" value="Upiši">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>
<?php include ("views/footer.php");?>