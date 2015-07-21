function checkForm() {
// Fetching values from all input fields and storing them in variables.
    var name = document.getElementById("username1").value;
var firstname = document.getElementById("firstname1").value;
var password1 = document.getElementById("password1").value;
var password2 = document.getElementById("password2").value;
var email = document.getElementById("email1").value;
//Check input Fields Should not be blanks.
if (name == '' || firstname == '' ||password1 == '' ||password2 == '' || email == '') {
alert("Fill All Fields");
} else {
    //Notifying error fields
var username1 = document.getElementById("username");
var firstname1 = document.getElementById("firstname");
var password3 = document.getElementById("password3");
var password4 = document.getElementById("password4");
var email1 = document.getElementById("email");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (username1.innerHTML == 'Must be 3+ letters' || firstname1.innerHTML == 'Must be 3+ letters' || password3.innerHTML == 'Password too short Must be 6+' || password4.innerHTML == 'Password too short Must be 6+' || email1.innerHTML == 'Invalid email') {
alert("Fill Valid Information");
} else {
    var request = newXmlHttpRequest();
    request.onreadystatechange = function() {
if (request.readyState == 4 && request.status == 200) {
document.getElementById("reponse").innerHTML = request.responseText;
    if(document.getElementById("reponse").innerHTML == 'You successfully registered. Please log in now.')
    {
        document.getElementById("myForm").reset();
    }
}
}
request.open("GET", "verif/verif_signup1.php?name=" + name + "&firstname=" + firstname+ "&password1=" + password1+ "&password2=" + password2+ "&email=" + email);
request.send();}
}
}
// AJAX code to check input field values when onblur event triggerd.
function newXmlHttpRequest(){
    if(window.XMLHttpRequest)
        return new XMLHttpRequest();
    return new ActiveXObject("Microsoft.XMLHTTP");
}

function validate(field, query){
    var xmlhttp = newXmlHttpRequest();
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open("GET", "verif/verif_signup.php?field=" + field + "&query=" + query);
xmlhttp.send();
}