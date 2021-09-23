<?php include ("views/head.php");?>
    <div style="text-align:center;">
        <img src="images/registracija.png" class="img-fluid" alt="Truck Shop - Registracija">
    </div>
<main class="container">
    <div class="row">
        <h1 class="naslov">Registruj se / Prijavi se</h1>
    </div>
    <hr class="hrNaslov"/>
    <div class="row">
    <div class="col-md-5">
            <h3>Registruj se</h3>
            <form method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Ime" id="tbIme" name="tbIme">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Prezime" id="tbPrezime" name="tbPrezime">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Korisničko ime" id="username" name="username">
                            <label class="label"> * Korisničko ime mora sadržati velika i mala slova i brojeve. </label>

                            <input type="password" class="form-control" placeholder="Šifra" id="password" name="password">
                            <label class="label mb-0"> * Minimalno 8 karaktera, mora imati velika, mala slova i brojeve </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="E-mail" id="email" name="email">
                    </div>
                    </div>
                    <div class="form-row" id="dodatnoPoljeReg">

                    </div>
                    <div class="form-row">
                        <script src="js/registracija.js"></script>
                        <input type="button" class="btn btn-secondary" id="btnReg" name="btnReg" value="Registruj se" onclick="konzola()"/>
                    </div>
                </form>
    </div>
        <div class="col-md-5">
            <h3>Prijavi se</h3>
            <form method="POST">
                <div class="form-row">
                    <input type="text" class="form-control" placeholder="E-mail" id="emailLog" name="emailLog">
                </div>
                <div class="form-row">
                        <input type="password" class="form-control" placeholder="Šifra" id="passwordLog" name="passwordLog">
                </div>
                <div class="form-row" id="dodatnoPolje">

                </div>
                <div class="form-row">
                    <script src="js/login.js"></script>
                    <input type="button" class="btn btn-secondary" id="btnLog" name="btnLog" value="Prijavi se" onclick="prijava()"/>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include ("views/footer.php");?>