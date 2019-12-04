<?php


    if (isset($_POST)){

        $sanitize = array(
            'usFirstname' => FILTER_SANITIZE_STRING,
            'usLastname' 	=> FILTER_SANITIZE_STRING,
            'usCountry' => FILTER_SANITIZE_STRING,
            'usGender' => FILTER_SANITIZE_STRING,
            'usMail' 	=> FILTER_SANITIZE_EMAIL,
            'userSubject' 	=> FILTER_SANITIZE_STRING,
            'userMessage' 	=> FILTER_SANITIZE_STRING);
    
        $result = filter_input_array(INPUT_POST, $sanitize); 

    
        if ($result != null AND $result != FALSE) {
    
            echo "Tous les champs ont été nettoyés !";
    
        } else {
    
            echo "Un champ est vide ou n'est pas correct!";
    
        }


        $result['usMail']=filter_var($_POST['usMail'], FILTER_VALIDATE_EMAIL);

        echo $result['usMail'];
        


        
    }else{

        echo "error";
    }


?>