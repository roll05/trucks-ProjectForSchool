<?php include("views/head.php");
if(isset($_SESSION['korisnik'])){
        if($_SESSION['korisnik']->ulogaId != 1){
            header("Location: index.php");
        }
    }
    else {
        $_SESSION['greska'] ="Niste ulogovani!";
        header("Location: index.php");
    }?>
<div>
    <img src="images/man/manCover.png" class="img-fluid" alt="Kontakt">
</div>
<main class="container">
    <h1 class="naslov"> Korisnici </h1>
    <hr class="hrNaslov"/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ime</th>
            <th scope="col">Prezime</th>
            <th scope="col">E-mail</th>
            <th scope="col">Korisničko ime</th>
            <th scope="col">Uloga</th>
            <th scope="col">Edituj</th>
            <th scope="col">Obriši</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $upit="SELECT * FROM korisnik";
        $rez=$konekcija->query("$upit")->fetchAll();
        foreach($rez as $kor):
        ?>
        <tr>
            <th scope="row"><?=$kor->korisnikId?></th>
            <td><?=$kor->ime?></td>
            <td><?=$kor->prezime?></td>
            <td><?=$kor->email?></td>
            <td><?=$kor->username?></td>
            <td><input type="text" class="updateKor" value="<?=$kor->ulogaId?>"> </td>
            <td><a href="updateKorisnika.php?id=<?=$kor->korisnikId?>" title="Izbriši korisnika" class="kontaktMail update"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
            <td><a href="php/deleteKorisnik.php?id=<?=$kor->korisnikId?>" class="btn btn-secondary delete" data-id="<?=$kor->korisnikId?>">Delete</a></td>
        <script>
            window.onload=function () {
                $(".delete").click(function(){
                    let id=$(this).data('id');

                    $.ajax({
                        method:"POST",
                        url:"http://localhost/project/php/deleteKorisnik.php",
                        data:{
                            id:id
                        },
                        success: function () {
							header("Location: ../index.php");

                        },
                        error:function(xhr, statuss){
                            let status=xhr.status;
                            switch (status) {
                                case 500:
                                    alert("Server error, it is not possible to delete post at this moment.");
                                    break;
                                case 404:
                                    alert("Page not found");
                                    break;
                                default:
                                    alert("Error: " + status + " - " + statuss);
                                    break;
                            }
                        }
                    })
            })}
        </script>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include ("views/footer.php");?>
