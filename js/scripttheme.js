
function checktheme() {

    var radios = document.getElementsByName("optionsRadios");

	for (i=0; i<radios.length; i++)
	if (radios[i].checked)
		var Choisie = radios[i].value;
    //alert(Choisie);
//Check input Fields Should not be blanks.//verifier que l'on a bien choisi un radio
    if(Choisie != undefined)
    {
    var request = newXmlHttpRequest();
    request.onreadystatechange = function() {
if (request.readyState == 4 && request.status == 200) {
document.getElementById("reponse3").innerHTML = request.responseText;
}
}
request.open("GET", "verif/update_theme.php?Choisie=" + Choisie);
request.send();}

}
