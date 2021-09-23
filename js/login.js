function prijava() {

    var email = $("#emailLog").val();
    var password = $("#passwordLog").val();

    var errors = new Array();

    var reEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var rePassword = /^[A-z0-9]{8,}$/;

    if (!reEmail.test(email)) {
        errors.push("Ne postoji korisnik sa ovom e-mail adresom");
        document.querySelector("#emailLog").style.border="1px solid red";
    }
    if (!rePassword.test(password)) {
        errors.push("Ne postoji korisnik sa ovom e-mail adresom");
        document.querySelector("#passwordLog").style.border="1px solid red";
    }

    if (errors.length != 0) {
        document.querySelector("#dodatnoPolje").innerHTML="Ne postoji korisnik sa ovim parametrima.";
    } else {
        $.ajax({
            url: "http://localhost/project/php/login.php",
            method: "post",
            data: {
                email: email,
                password: password,
                btnLog: true
            },
            success: function (podaci) {
                // console.log("Poslato");
                // console.log(podaci);
                window.location = "index.php";

            },
            error: function (xhr, statuss) {
                let status = xhr.status;
                if (status == 500) {
                    alert("greska na serveru");
                } else if (status == 400) {
                    alert("nema");
                }
                else {
                    //window.location.href="index.php";
                    alert("greska" + statuss + status);
                }
            }

        })
    }
}