<?php include("views/head.php");
include ("php/konekcija.php");
if(isset($_SESSION['korisnik'])){
    if($_SESSION['korisnik']->ulogaId != 1){
        header("Location: index.php");
    }
}
else {
    $_SESSION['greska'] ="Niste ulogovani!";
    header("Location: index.php");
}
$id=$_GET['id'];
$upit="SELECT ime, prezime, username, email, ulogaId FROM korisnik WHERE korisnikId=$id";
$rez=$konekcija->query($upit)->fetch();
?>
<div>
    <img src="images/volvo/volvoCover.png" class="img-fluid" alt="Volvo">
</div>
<main class="container">
    <h1 class="naslov"> Update korisnika </h1>
    <hr class="hrNaslov"/>
    <form method="post" action="php/updateKorisnik.php">
    <table>
        <tr>
            <?php
            foreach ($rez as $item):
            ?>
            <td> <?=$item->ime?></td>
            <td> <?=$item->prezime?></td>
            <td> <?=$item->username?></td>
            <td> <?=$item->email?></td>
            <td> <input type="text" class="btn btn-secondary" value="<td> <?=$item->korisnikId?></td>" </td></td>
            <td> <input type="submit" class="btn btn-secondary" value="Izmeni" </td>
            <?php
            endforeach;
            ?>
        </tr>
    </table>
    </form>
</main>
<?php include ("views/footer.php");?>
