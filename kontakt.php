<?php include ("views/head.php");?>
<div style="text-align:center;">
    <img src="images/contact.png" class="img-fluid" alt="Kontakt">
</div>
<main class="container">
    <h1 class="naslov"> Kontakt </h1>
    <hr class="hrNaslov"/>
    <div class="row mt-md-4">
        <div class="col-lg-6 m-auto">
            <p class="aboutDescription">Truck Shop se nalazi u Nemanjinoj ulici i čini ga prodajni salon i servis koji je opremljen najsavremenijim uređajima i specijalnim alatima po najvišim standardima za pružanje kompletne i vrhunske usluge vlasnicima vozila. </p>
            <p>e: <a href="mailto:office@truckshop.rs" class="kontaktMail">office@truckshop.rs</a></p>
            <p>t: 011/555-333</p>
            <p>a: Nemanjina 11, 11000 Beograd</p>
        </div>
        <div class="imgDescription" class="col-md-5 p-auto">
            <img src="images/contact1.png" alt="Truck Shop - Kontakt">
        </div>
    </div>
    <div class="row mt-md-4">
        <div class="col-lg-6">
            <h3>Kontaktirajte nas:</h3>
            <form method="post">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="kontaktIme" name="kontaktIme" placeholder="Ime">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="kontaktEmail" name="kontaktEmail" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="kontaktNaslov" name="kontaktNaslov" placeholder="Naslov">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                    <textarea class="form-control" id="kontaktPoruka" name="kontaktPoruka" rows="3" placeholder="Tekst poruke"></textarea>
                </div>
                </div>
                <div class="form-row" id="dodatnoPoljeMail">

                </div>
                <div class="form-row">
                    <input type="button" class="btn btn-secondary" id="btnMail" name="btnMail" value="Pošalji" onclick="posaljiMail()">
                </div>
            </form>
        </div>
        <div class="imgDescription" class="col-md-6 p-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.7493050618523!2d20.458060715047708!3d44.80629748512138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa84386204f%3A0x42b46a3cf8acf0a1!2z0J3QtdC80LDRmtC40L3QsCAxMSwg0JHQtdC-0LPRgNCw0LQgMTEwMDA!5e0!3m2!1ssr!2srs!4v1551196062941" width="475" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</main>
<script src="js/mail.js"></script>
<?php include ("views/footer.php");?>
