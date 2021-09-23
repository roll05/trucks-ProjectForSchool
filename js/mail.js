function posaljiMail (){

    var ime=$("#kontaktIme").val();
    var email=$("#kontaktEmail").val();
    var naslov=$("#kontaktNaslov").val();
    var poruka=$("#kontaktPoruka").val();

    var reIme=/^[A-ZĐŠŽĆČ][a-zđšžćč]{2,14}(\s[A-ZĐŠŽĆČ][a-zđšžćč]{2,14})?$/;
    var reNaslov=/^[A-ZĐŠŽĆČ][a-zđšžćč]{2,14}(\s[A-zđšžćč]{2,14})*$/;
    var reEmail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var podaci=new Array();
    var greske=new Array();

    if(reIme.test(ime)){
        podaci.push(ime);
    }
    else {
        greske.push(ime);
        document.querySelector("#kontaktIme").style.border="1px solid red";
    }
    if(reNaslov.test(naslov)){
        podaci.push(naslov);
    }
    else {
        greske.push(naslov);
        document.querySelector("#kontaktNaslov").style.border="1px solid red";
    }
    if(reEmail.test(email)){
        podaci.push(email);
    }
    else {
        greske.push(email);
        document.querySelector("#kontaktEmail").style.border="1px solid red";
    }
    if(poruka==''){
        greske.push(poruka);
        document.querySelector("#kontaktPoruka").style.border="1px solid red";
    }
    if(greske.length>0) {
        document.querySelector("#dodatnoPoljeMail").innerHTML="Polja nisu dobro popunjena.";
    }
    else {
        $.ajax({
            url: "http://localhost/project/php/mail.php",
            method: "post",
            data: {
                ime: ime,
                naslov: naslov,
                email: email,
                poruka:poruka,
                btnMail:true
            },
            success: function (podaci) {
                // console.log("Poslato");
                // console.log(podaci);
                window.location = "kontakt.php";
                document.querySelector("#dodatnoPoljeMail").innerHTML="Vaša poruka je uspešno poslata.";
            },
            error: function (xhr, statuss) {
                let status=xhr.status;
                if(status==500){
                    alert("greska na serveru");
                }
                else if(status==404){
                    alert("nema");
                }
                else {
                    alert("greska" + statuss + status);
                }
            }

        });
    }

}