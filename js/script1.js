function checkFormedit() {
// Fetching values from all input fields and storing them in variables.
    var name = document.getElementById("name1").value;
var firstname = document.getElementById("firstname1").value;
var email = document.getElementById("email1").value;
var city = document.getElementById("city1").value;
var high = document.getElementById("high1").value;
var description = document.getElementById("description3").value;
var upper = document.getElementById("upper1").value;
var description2 = document.getElementById("description4").value;
var birthday = document.getElementById("birthday1").value;
var high_school_grade = document.getElementById("highschoolgrade1").value;
var upper_school_grade = document.getElementById("upperschoolgrade1").value;
var twitter = document.getElementById("twitter1").value;
var facebook = document.getElementById("facebook1").value;
var google = document.getElementById("google1").value;
var instagram = document.getElementById("instagram1").value;
//var file = document.getElementById("file1").value;
//Check input Fields Should not be blanks.
if (name == '' || firstname == '' ||email == '' ||city == '' || high == ''|| description == ''|| upper == ''|| description2 == ''){
alert("Fill All Fields");
}else {
    //Notifying error fields
var name1 = document.getElementById("name");
var firstname1 = document.getElementById("firstname");
var email1 = document.getElementById("email");
var city1 = document.getElementById("city");
var high1 = document.getElementById("high");
var description3 = document.getElementById("description");
var upper1 = document.getElementById("upper");
var description4 = document.getElementById("description2");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (name1.innerHTML == 'Must be 3+ letters' || firstname1.innerHTML == 'Must be 3+ letters' || email1.innerHTML == 'Invalid email'|| city1.innerHTML == 'Complete your city Must be 3+'|| high1.innerHTML == 'Complete your high Must be 2+'|| description3.innerHTML == 'Describe Must be 4+'|| upper1.innerHTML == 'Complete your upper Must be 2+'|| description4.innerHTML == 'Describe Must be 4+') {
alert("Fill Valid Information");
} else {
    var request = newXmlHttpRequest();
    request.onreadystatechange = function() {
if (request.readyState == 4 && request.status == 200) {
document.getElementById("reponse1").innerHTML = request.responseText;
        if(document.getElementById("reponse1").innerHTML == 'You successfully update your infos.\n')
    {
        document.getElementById("myForm1").reset();
        
    }
}
}
request.open("GET", "verif/update_infos1.php?name=" + name + "&firstname=" + firstname + "&email=" + email + "&city=" + city+ "&high=" + high+ "&description=" + description+ "&upper=" + upper+ "&description2=" + description2+ "&twitter=" + twitter+ "&facebook=" + facebook+ "&google=" + google+ "&instagram=" + instagram+"&birthday=" +birthday+ "&high_school_grade=" +high_school_grade+ "&upper_school_grade=" +upper_school_grade);
request.send();}
}
}
// AJAX code to check input field values when onblur event triggerd.
function newXmlHttpRequest(){
    if(window.XMLHttpRequest)
        return new XMLHttpRequest();
    return new ActiveXObject("Microsoft.XMLHTTP");
} 

function validateedit(field, query){
    var xmlhttp = newXmlHttpRequest();
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open("GET", "verif/update_infos.php?field=" + field + "&query=" + query);
xmlhttp.send();
}