<?php

$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
if (strlen($value) < 4) {
    echo "Must be 3+ letters";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid firstname
if ($formfield == "firstname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password3") {
if (strlen($value) < 6) {
echo "Password too short Must be 6+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password4") {
if (strlen($value) < 6) {
echo "Password too short Must be 6+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}

?>