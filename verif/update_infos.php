<?php

$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "name") {
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
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid 
if ($formfield == "city") {
if (strlen($value) < 3) {
echo "Complete your city Must be 3+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid 
if ($formfield == "high") {
if (strlen($value) < 2) {
echo "Complete your high Must be 2+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid 
if ($formfield == "description") {
if (strlen($value) < 4) {
echo "Describe Must be 4+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid 
if ($formfield == "upper") {
if (strlen($value) < 2) {
echo "Complete your upper Must be 2+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}
// Check Valid or Invalid 
if ($formfield == "description2") {
if (strlen($value) < 4) {
echo "Describe Must be 4+";
} else {
echo "<span style=\"color:green;\">Valid</span>";
}
}

?>