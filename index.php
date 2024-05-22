<?php 
//Echo response back to the API
header('Content-type: text/plain');

//Read POST variables from the API
$sessionId = $_POST['sessionId'];
$networkCode = $_POST['networkCode'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = ltrim($_POST['phoneNumber']);
$text = $_POST['text'];

// Check if the text is empty to start a new session
if ($text == "") {
    $response = "CON Platforms: \n1. Phones \n2.Desktops";

} elseif ($text == 1) {
    // Business logic level 1 (Phones platforms)...
     $response = "CON Phone Platforms \n1. Android\n2. iPhone";
 
} elseif ($text == 1*1) {
    // Business logic level 2 (Android versions)...
    $response = "CON Android Versions \n1. Nougat v1\n2. Oreo v2";

} elseif ($text == 1*2) {
    // Business logic level 2 (iPhone platforms)...
    $response = "END Coming soon ....";

} elseif ($text == 1*1*1) {
    // Business logic level 3 (Android versions option 1)...
    $response = "END Android Nougat is version number 7 and was released on August,22 2016";

} elseif ($text == 1*1*2) {
    // Business logic level 3 (Android versions option 2)...
    $response = "END Android Oreo is version number 8 and was released on December,5 2017";

} elseif ($text == 2) {
    // Business logic level 1 (Desktops platforms)...
     $response = "CON Desktop Platforms \n1. Windows\n2.Mac";
 
}  elseif ($text == 2*1) {
    // Business logic level 2 (Windows versions)...
    $response = "CON Windows Versions \n1. Windows XP\n2. Windows 11";

} elseif ($text == 2*1*1) {
    // Business logic level 3 (Windows versions option 1)...
    $response = "END Windows XP was released on October,25 2001";

} elseif ($text == 2*1*2) {
    // Business logic level 3 (Windows versions option 2)...
    $response = "END Windows 11 was released on October,5 2021";

} else {
    $response = "END Invalid input";
}

echo $response;

; ?>