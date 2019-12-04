<?php


    if (isset($_POST)){

        $options = array(
            'usFirstname' => FILTER_SANITIZE_STRING,
            'usLastname' 	=> FILTER_SANITIZE_STRING,
            'usCountry' => FILTER_SANITIZE_STRING,
            'usGender' => FILTER_SANITIZE_STRING,
            'usMail' 	=> FILTER_VALIDATE_EMAIL,
            'userSubject' 	=> FILTER_SANITIZE_STRING,
            'userMessage' 	=> FILTER_SANITIZE_STRING);
    
        $result = filter_input_array(INPUT_POST, $options); 

    
        if ($result != null AND $result != FALSE) {
    
            echo "Tous les champs ont été nettoyés !";
    
        } else {
    
            echo "Un champ est vide ou n'est pas correct!";
    
        }
    
        foreach($options as $key => $value) 
        {
        echo $result[$key]=trim($result[$key]) . "</br>";
        }
    

        
    }else{

        echo "error";
    }


?>