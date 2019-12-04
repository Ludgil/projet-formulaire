<?php

$array = $_POST;

$options = $array(
    'userFirstname' => FILTER_SANITIZE_STRING,
    'userLastname' 	=> FILTER_SANITIZE_STRING,
    'userCountry' => FILTER_SANITIZE_STRING,
    'userGender' => FILTER_SANITIZE_STRING,
    'userMail' 	=> FILTER_VALIDATE_EMAIL,
    'userSubject' 		=> FILTER_SANITIZE_STRING,
    'userMessage' 		=> FILTER_SANITIZE_STRING);

$result = filter_input_array(INPUT_POST, $options); 

if ($result != null AND $result != FALSE) {

	echo "Tous les champs ont été nettoyés !";

} else {

	echo "Un champ est vide ou n'est pas correct!";

}

foreach($options as $key => $value) 
{
   $result[$key]=trim($result[$key]);
}


?>
