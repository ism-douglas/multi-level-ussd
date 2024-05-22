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
    $response = "CON Gadget Platforms:\n";
    $response .= "1. Phones \n";
    $response .= "2. Desktops \n";
    $response .= "3. Others";

} elseif ($text == "1") {
    // Business logic level 1 (Phones platforms)...
     $response = "CON Phone Platforms:\n";
     $response .= "1. Android\n";
     $response .= "2. iPhone";
 
} elseif ($text == "1*1") {
    // Business logic level 2 (Android versions)...
    $response = "CON Android Versions:\n";
    $response .= "1. Nougat\n";
    $response .= "2. Oreo";

} elseif ($text == "1*2") {
    // Business logic level 2 (iPhone platforms)...
    $response = "END Coming soon ....";

} elseif ($text == "1*1*1") {
    // Business logic level 3 (Android versions option 1)...
    $response = "END Android Nougat is version number 7 and was released on August,22 2016";

} elseif ($text == "1*1*2") {
    // Business logic level 3 (Android versions option 2)...
    $response = "END Android Oreo is version number 8 and was released on December,5 2017";

} elseif ($text == "2") {
    // Business logic level 1 (Desktops platforms)...
     $response = "CON Desktop Platforms:\n";
     $response .= "1. Windows\n";
     $response .= "2. Mac";
 
} elseif ($text == "2*1") {
    // Business logic level 2 (Windows versions)...
    $response = "CON Windows Versions:\n";
    $response .= "1. Windows XP\n";
    $response .= "2. Windows 11";

} elseif ($text == "2*2") {
    // Business logic level 2 (Mac versions)...
    $response = "END Coming soon ...\n";
    
} elseif ($text == "2*1*1") {
    // Business logic level 3 (Windows versions option 1)...
    $response = "END Windows XP was released on October,25 2001";

} elseif ($text == "2*1*2") {
    // Business logic level 3 (Windows versions option 2)...
    $response = "END Windows 11 was released on October,5 2021";

} elseif ($text == "3") {
    // Business logic level 1 (Other platforms)...
    $response = "END Coming soon ...";

}else {
    //If input is invalid
    $response = "END Invalid input";
}

echo $response;

; ?>