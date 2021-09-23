function dodajKamion(){
	
	var model = $("#modelNaziv").val;
	var marka = $("#ddlMarka");
	var opis = $("#modelOpis").val;
	var boja = $("#ddlBoja");
	var motor = $("#ddlMotor");
	var godina = $("ddlGodina");
	var menjac = $("ddlMenjac");
	var pogon = $("ddlPogon");
	var snaga = $("ddlSnaga");
	var sasija = $("ddlSasija");
	var gorivo = $("ddlGorivo");

	var error = [];
	var podaci = [];
	if(model.length == 0){
		podaci.push = (model);
	}else{
		error.push = ("Marka mora da bude popunjena");
	}
	
}