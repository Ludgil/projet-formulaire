<?php
session_start();
$_SESSION['sessionName'] = "sendForm";
$_SESSION['error']=0;
$datas                   = array(
    'usFirstname'     => FILTER_SANITIZE_STRING,
    'usLastname'      => FILTER_SANITIZE_STRING,
    'usMail'          => FILTER_SANITIZE_EMAIL,
    'usCountry'       => FILTER_SANITIZE_STRING,
    'usGender'        => FILTER_SANITIZE_STRING,
    'userSubject'     => FILTER_SANITIZE_STRING,
    'userElseSubject' => FILTER_SANITIZE_STRING,
    'userMessage'     => FILTER_SANITIZE_STRING);

    $result = filter_input_array(INPUT_POST, $datas);
// initialisation variable
$firstName          = "";
$firstNameMaxLength = 20;
$errorFirstName     = "";
$lastName           = "";
$lastNameMaxLength  = 30;
$errorLastName      = "";
$country            = "";
$countryMaxLength   = "50";
$errorCountry       = "";
$gender             = "";
$genderMaxLength    = "20";
$errorGenger        = "";
$mail               = "";
$mailMaxLength      = "80";
$errorMail          = "";
$subject            = "";
$subjectMaxLength   = "80";
$errorSubject       = "";
$message            = "";
$messageMaxLength   = "1500";
$errorMessage       = "";

function checkMail($mail){
    // validation mail
    if (filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $_SESSION['userMail']=$mail;
    }else {
        $_SESSION['errorMail']="Please insert a valid email"; 
        $_SESSION['error']=1;
        
    }
};
function checkInput($str,$maxLength,$valueName,$illegal) {
    // check length
    if(strlen($str)<3 || strlen($str)>$maxLength){
        $_SESSION[$valueName."Error"]="Number of caracter incorrect<br>";
    } if(strpbrk($str, $illegal) ==true){ // check illegal caracter
        if(isset($_SESSION[$valueName."Error"])){
            $_SESSION[$valueName."Error"].= "Illegal caracter found";
            $_SESSION['error']=2;
            }else {
                $_SESSION[$valueName."Error"]= "Illegal caracter found";
                $_SESSION['error']=3;
            }
       }else {
            $_SESSION[$valueName]=$str;               
       }
}

function checkSelect($str,$maxLength,$valueName,$illegal,$mess) {
    if($str!=='0'){
        checkInput(trim($str),$maxLength,$valueName,$illegal);
    }        else{ 
        $_SESSION[$valueName."Error"]= $mess.",please";
        $_SESSION['error']=4;
     
    }    

}




// check variable
 $pattern01 = "#$%^&*()+=[]'!;,./\{}|:<>?~0123456789";
checkInput($result['usFirstname'], 20, 'userFirstname',$pattern01);
checkInput($result['usLastname'], 20, 'userLastname',$pattern01);
checkSelect($result['usCountry'], 60, 'userCountry',$pattern01,"Choose your Country");
checkSelect($result['usGender'], 20, 'userGender',$pattern01,"Choose your Gender");
//echo $result['userSubject'];
if ($result['userSubject']==='3'){
    checkInput($result['userElseSubject'], 80,'userElseSubject',$pattern01);
    $_SESSION['userSubject']=3;
}else {
    
    checkSelect($result['userSubject'], 50, 'userSubject',$pattern01,"choose a Subject");

}
//echo $result['userMessage'];
checkInput($result['userMessage'], 2000, 'userMessage',"*");
//$result['usMail']=filter_var($_POST['usMail'], FILTER_VALIDATE_EMAIL);
 checkMail(($result['usMail']));
//$_SESSION['userMail']=$result['usMail'];
//echo $_SESSION['error'];
    if($_SESSION['error']==0){
        echo "send mail";
    }else {
        echo $_SESSION['error'];
    }

header('Location: form.php');
