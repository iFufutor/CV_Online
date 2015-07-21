
function checkco() {

    var email = document.getElementById("emaillog").value;
    var password = document.getElementById("passwordlog").value;

    var request = newXmlHttpRequest();
    request.onreadystatechange = function() {
if (request.readyState == 4 && request.status == 200) {
if(request.responseText!= 'Incorrect password')
    {
    window.location.replace("edit_resume.php");
    }
    else{
    document.getElementById("reponse3").innerHTML = request.responseText;
    }
}
}
request.open("GET", "verif/verif_login.php?email=" + email+ "&password=" +password);
request.send();}

