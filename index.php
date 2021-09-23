<?php include ("views/head.php");?>
            <div class="full" class="col-xl-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" class="slider">
                          <div class="carousel-item active">
                            <img class="d-block mw-100" src="images/slider1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Truck Sop</h5>
                                    <p>Siguran izbor</p>
                                  </div>
                          </div>
                          <div class="carousel-item" class="slider">
                            <img class="d-block mw-100" src="images/slider2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Mi smo gde ste vi</h5>
                                    <p>Cilj nam je da vam ponudimo najviši nivo usluge.</p>
                                  </div>
                          </div>
                          <div class="carousel-item" class="slider">
                            <img class="d-block mw-100" src="images/slider3.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Pouzdan rešenja</h5>
                                    <p>Najkvalitetniji proizvođači na svetskom tržištu</p>
                                  </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>

        <main class="container">
                <div id="frontP" class="col">
                        <p>Truck shop uspešno posluje već 22 godine. Strateško opredeljenje kompanije utemeljeno je na visokim vrednostima korporativne kulture, poštovanju partnerskih odnosa sa klijentima kao i društveno odgovornom poslovanju.</p>
                    </div>
                <div class="row">
                    <div id="izdvojeno" class="col-8 col-md-3 shadow-lg">
                        <div class="img">
                            <img src="images/man1.png" alt="MAN">
                        </div>
                        <div class="description">
                            <p>Novo merilo u međunarodnom saobraćaju – pouzdan, jednostavne konstrukcije i ekonomičan sa visokim stepenom komfora za boravak.</p>
                        </div>
                    </div>
                    <div id="izdvojeno" class="col-8 col-md-3 shadow-lg">
                        <div class="img">
                            <img src="images/scania.png" alt="Scania" class="icon">
                        </div>
                        <div class="description">
                            <p>Kontroliše emisiju štetnih gasova kako bi vaši poslovi bili ekološki. Prilagodljivi teretu, uslovima i udobnosti koje zahteva vaša industrija.</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-3 shadow-lg" id="izdvojeno">
                        <div class="img">
                            <img src="images/mercedes.png" alt="Mercedes" class="icon">
                        </div>
                        <div class="description">
                            <p>Kompaktan kamion za regionalnu distribuciju poznat po fleksibilnosti, voznim karakteristikama i prvoklasnoj produktivnosti.</p>
                        </div>
                    </div>
                </div>
            <div id="count">

            </div>
            <div class="container">
                <hr class="hrNaslov mt-5"/>
                <div class="row">
                    <div class="col-md-3">
                        <a href="man.php"><img src="images/man.png" alt="MAN"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="scania.php"></a><img src="images/scania/scania.png" alt="SCANIA"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="volvo.php"><img src="images/volvo/volvo.png" alt="VOLVO"></a>
                    </div>
                </div>
            </div>
        </main>
<?php include ("views/footer.php");?>