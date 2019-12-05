<?php
    session_start();
    $_SESSION['sessionName']="sendForm";
    $error = 7;
    $datas = array(
        'usFirstname' 	=> FILTER_SANITIZE_STRING,
        'usLastname' 	=> FILTER_SANITIZE_STRING,
        'usMail' 		=> FILTER_SANITIZE_EMAIL,
        'usCountry' 	=> FILTER_SANITIZE_STRING,
        'usGender' 		=> FILTER_SANITIZE_STRING,
        'userSubject' 	=> FILTER_SANITIZE_STRING,
        'userElseSubject' 	=> FILTER_SANITIZE_STRING,
        'userMessage' 		=> FILTER_SANITIZE_STRING);


        $result = filter_input_array(INPUT_GET, $datas);  
        // initialisation variable
        $firstName="";
        $firstNameMaxLength=20;
        $errorFirstName="";        
        $lastName="";
        $lastNameMaxLength=30;
        $errorLastName="";        
        $country="";
        $countryMaxLength="50";
        $errorCountry="";        
        $gender="";
        $genderMaxLength="20";
        $errorGenger="";        
        $mail="";
        $mailMaxLength="80";
        $errorMail="";        
        $subject="";
        $subjectMaxLength="80";
        $errorSubject="";        
        $message="";
        $messageMaxLength="1500";
        $errorMessage="";
        
        // check for special caracter
        function checkSpecialChar ($str){
            $illegal = "#$%^&*()+=[]'!;,./\{}|:<>?~";
            return  (false === strpbrk($str, $illegal)) ? true : false;
        }
        
        // validation of variable
        function validation($str, $numberOfChar,$valueName, $good, $error){        
            if($numberOfChar==2000){ // si le nombre de char est = a 1500 c'est qu'on verifie la taille du message
                if(strlen($str)<$numberOfChar && strlen($str)>2){
                    $_SESSION[$valueName]=$str;                    
                 }//else{
                //     $error=$numberOfChar." "."characters only";
                     
                // }
            }           
            else if (strlen($str)<$numberOfChar && strlen($str)>2 &&checkSpecialChar($str)== true){
                $_SESSION[$valueName]=$str;   
             }//else{
            //     $error=$numberOfChar." characters only and special character are not allowed. ";
            //     $_SESSION[$error]=$error;   
            //  }
        }
       
        // check variable
        validation($result['usFirstname'],20,'userFirstname',$firstName,$errorFirstName);
        validation($result['usLastname'],20,'userLastname',$lastName,$errorLastName);
        validation($result['usCountry'],40,'userCountry',$country,$errorCountry);
        validation($result['usGender'],20,'userGender',$gender,$errorGenger);
        validation($result['userSubject'],50,'userSubject',$subject,$errorSubject);
        validation($result['userMessage'],2000,'userMessage',$message,$errorMessage);       
        $result['usMail']=filter_var($_GET['usMail'], FILTER_VALIDATE_EMAIL);
        $_SESSION['userMail']=$result['usMail'];

        header('Location: form.php');
        
?>