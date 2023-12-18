<?php  
// define variables to empty values  
$certname = $certemail = $certschool" = $certdate = $certregistration = "";  

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $certname = test_input($_POST["name"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $certname) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    }  
    $certemail = test_input($_POST["email"]);
    // $email = $_POST ["Email"];  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $certemail) ){  
        $ErrMsg = "Email is not valid.";  
        echo $ErrMsg;  
    }  
    $certschool = test_input($_POST["school"]);
    // $name = $_POST ["Name"];  
    if (!preg_match ("/^[a-zA-z]*$/", $certschool) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    }
    $certdate = test_input($_POST["date"]);
    if (!preg_match ("/^(\d{2})-(\d{2})-(\d{4})$/", $certdate) ){
    $ErrMsg = "Only numeric value is allowed.";
    echo $ErrMsg;
    } 
    $certregistration = $_POST ["registration"];
    if (!preg_match ("/^[0-9]*$/", $certregistration) ){
    $ErrMsg = "Only numeric value is allowed.";
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