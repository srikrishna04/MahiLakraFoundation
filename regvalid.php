<?php
// define variables and set to empty values
$name = $school = $city= $state = $email"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    }  

    $school = test_input($_POST["school"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $school) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    }  

    $city = test_input($_POST["city"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $city) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    } 

    $state = test_input($_POST["state"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $state) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    } 
    $email = test_input($_POST["email"]);
    // $email = $_POST ["Email"];  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "Email is not valid.";  
        echo $ErrMsg;  
    }  
} 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>