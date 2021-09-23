<?php include ("php/konekcija.php")?>
<footer id="footer">
            <div class="container">
                <div class="row">
            <div class="col-lg-4">
                <h5> O nama </h5>
                <p style="text-align: justify">„Truck Shop“ Beograd je matična kuća grupacije koja posluje na tržištu Srbije od 1997. godine. Svojim kapacitetima, tehnologijom rada i kvalitetom, Truck Shop je danas u mogućnosti da odgovori na sve zahteve savremenog tržišta, garantuje kvalitet i pruži kompletnu podršku klijentima.</p>
            </div>
            <div class="col-lg-4">
                <h5> Brzi linkovi </h5>
                <ul id="brzi">
                    <?php
                        $upitBrzi="SELECT * FROM menu";
                        $rez=$konekcija->query($upitBrzi);
                        foreach($rez as $li):?>
                        <li><a href="<?=$li->Putanja?>"><?=$li->Tekst?></a></li>
                    <?php endforeach;?>
                    
                </ul>
            </div>
            <div class="col-lg-4">
                <h5> Konktaktirajte nas </h5>
                <div>
                    <p>e: <a href="mailto:office@truckshop.rs">office@truckshop.rs</a></p>
                    <p>t: 011/555-333</p>
                    <p>a: Nemanjina 11, 11000 Beograd</p>
                    <div class="row" id="socialMedia">
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fa fa-instagram" style="font-size:36px"></i></a>
                        <a href="https://www.linkedin.com/" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="full" class="col-xl-12">
                <hr id="hr"/>
            </div>
            <div class="container">
            <div class="row">
            <div class="col">
            <p>&copy; Truck Shop 2020. | <a href="o-autoru.php">Designed by Milan Dobrosavljevic</a></p>
            </div>
            </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>