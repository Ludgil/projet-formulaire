<?php
session_start();
//var_dump($_SESSION);
if (isset($_SESSION['sessionName'])) {$flag = 0;}
$countryArray = array('Choose Your Country', 'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island', 'Brazil', 'British Indian Ocean Territory', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote D\'ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-bissau', 'Guyana', 'Haiti', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jersey', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macao', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Pierre and Miquelon', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard and Jan Mayen', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic', 'Tajikistan', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Venezuela', 'Viet Nam', 'Wallis and Futuna', 'Western Sahara', 'Yemen', 'Zambia', 'Zimbabwe');
$genderArray  = array('Choose Your Gender', 'Male', 'Female');
$subjectArray = array('Make Your Choice', 'Technical Support', 'Commercial Support', 'Other Subject');
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Contact</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width   , initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" media="screen and (max-width: 480px)" href="assets/css/smallscreen.css" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width:780px)" href="assets/css/middlescreen.css" type="text/css" /> -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/form.css">
        <link rel="stylesheet" media="screen and (max-width: 480px)" href="assets/css/smallscreen.css" type="text/css" />
    </head>

    <body>
        <!-- menu bootstrap  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
            <a class="navbar-brand" href="#"> <img src="assets/img/logo.png" alt="" width="100px" height="100px"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="separator d.none d.md.block">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.html">Catalog </a>
                    </li>
                    <li class="separator">|</li>
                    <li class="nav-item active">
                        <a class="nav-link" href="form.php">Contact<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- le formulaire -->
        <form id="formulare" action="checkForm.php" method="POST">
            <div class="row justify-content-between">
                <header class="col-12 text-center">
                    <h1>CONTACT-US !</h1>
                    <h3>Any questions ? Any problems ? don't hesitate to contact us by sending a message with our form.</h3>
                </header>
            </div>
            <!--  première ligne  -->
            <div class="form-row mb-2">
                <div class="col-md-6 col-sm-12 d-flex flex-column">
                    <label> Firstname</label>
                    <input  type="text" name="usFirstname" id="idFirstname" required maxlength=30 aria-label="firstname" aria-describedby="user firstname" aria-required="true" value="<?php if(isset($_SESSION['userFirstname'])){echo $_SESSION['userFirstname'];}?>"></<input>
                    <p id="errorFirstname" class="good">Only letters are allowed</p>
                   <?php if(isset($_SESSION['userFirstnameError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userFirstnameError']."'"." alt='error'>";
                    }?>
                </div>
                <div class="col-md-6 col-sm-12 d-flex flex-column">
                    <label> Lastname</label>
                    <input  type="text" name="usLastname" id="idLastname" required maxlength=30 aria-label="lastname" aria-describedby="user lastname" aria-required="true" value="<?php if(isset($_SESSION['userLastname'])){echo $_SESSION['userLastname'];}?>"></<input>
                    <p id="errorLastname" class="good">Only letters are allowed</p>
                    <?php if(isset($_SESSION['userLastnameError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userLastnameError']."'"." alt='error'>";
                    }?>
                </div>
            </div>
            <!--  deuxième ligne  -->   
            <div class="form-row mb-2">
                <div class="col-md-12 col-sm-12 d-flex flex-column">
                    <label>Mail</label>
                    <input  type="text" name="usMail" id="idMail" required maxlength=80 size=40 aria-label="mail" aria-describedby="user mail address" aria-required="true" value="<?php if(isset($_SESSION['userMail'])){echo $_SESSION['userMail'];}?>"></<input>
                    <p id="errorMail" class="good">Your input isn't a mail</p>
                    <?php if(isset($_SESSION['errorMail'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['errorMail']."'"." alt='error'>";
                    }?>
                </div>
            </div>
            <!--  troisième ligne  -->
            <div class="form-row mb-2">
                <!-- country -->
                <div class="col-md-6 col-sm-12 d-flex flex-column">
                    <label>Country</label>
                    <select  id="idCountry" name="usCountry">
                            <?php
                            foreach ($countryArray as $key => $value) {
                                if($key==0){
                                    $option = "<option value='0'";
                                }else { $option = "<option value='$value'";
                                }
                               
                                if (isset($_SESSION['userCountry'])) {
                                    if ($_SESSION['userCountry'] == $value) {
                                     $option .= " selected";
                                    }
                                }
                            $option .= ">$value</option>";
                            echo $option;
                            }
                            ?>
                    </select>
                    <p id="errorCountry" class="good">You had to select one country</p>
                    <?php if(isset($_SESSION['userCountryError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userCountryError']."'"." alt='error'>";
                    }?>
                </div>
                <!--  gender -->
                <div class="col-md-6 col-sm-12 d-flex flex-column">
                    <label>Gender</label>
                    <select  id="idGender" name="usGender">
                            <?php
                                foreach ($genderArray as $key => $value) {
                                    if($key==0){
                                        $options = "<option value='0'";
                                    }
                                        else{
                                            $options = "<option value='$value'";
                                        }
                                    
                                    if ($_SESSION['userGender'] == $value) {
                                        $options .= " selected";
                                }
                                $options .= ">$value</option>";
                                echo $options;
                                }
                                ?>
                    </select>
                    <p id="errorGender" class="good">You had to select your gender</p>
                    <?php if(isset($_SESSION['userGenderError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userGenderError']."'"." alt='error'>";
                    }?>
                </div>
            </div>
            <!--  quatrième ligne  -->
            <div class="form-row mb-2">
                <!-- choose the subject -->
                <div class="col-md-12 col-sm-12 d-flex flex-column">
                    <label> Message Subject </label>
                    <select name="userSubject" id="formMessSubject">
                            <?php
                            foreach ($subjectArray as $key => $value) {
                                if($key==0){
                                    $options = "<option value='0'";
                                }else if($key==3){
                                    $options = "<option value='3'";
                                }else{
                                    $options = "<option value='$value'";
                                }
                                if(isset($_SESSION['userSubject'])){
                                    if($_SESSION['userSubject']==$value || $_SESSION['userSubject']==$key){
                                        $options.= "selected";
                                    }
                                }
                            $options .= ">$value</option>";
                            echo $options;
                            }
                            ?>
                    </select>
                    <p id="errorSubject" class="good">You had to choose a subject</p>
                    <?php if(isset($_SESSION['userSubjectError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userSubjectError']."'"." alt='error'>";
                        }
                    if(isset($_SESSION['userElseSubjectError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userElseSubjectError']."'"." alt='error'>";
                    }?>
                    
                </div>
            </div>
            <!-- cinquième ligne -->
            <div class="form-row mb-2">
                <div class="col-md-12 col-sm-12">
                    <?php
                    if (isset($_SESSION['userSubject'])) {
                        if ($_SESSION['userSubject'] === "3") {
                             echo "<input style='display:block' style='display:block' type='text' class='w-75 p-0' name='userElseSubject' id='formMesSubjectElse' placeholder='Enter your subject here'>";
                        }
                        
                    } ?>
                    <input type='text' class='w-75 p-0' style='display:none' name='userElseSubject' id='formMesSubjectElse' placeholder='Enter your subject here' value="<?php if(isset($_SESSION['userElseSubject'])){echo $_SESSION['userElseSubject'];}; ?>">
                         

                    
                </div>
            </div>
            <!-- 6ème ligne -->
            <div class="form-row mb-2">
                <div class="col-md-12 col-sm-12 d-flex flex-column">
                    <label>Votre message</label>
                    <textarea name="userMessage" id="idformMessage" cols=60 rows=10 required><?php if(isset($_SESSION['userMessage'])){$texte=ltrim($_SESSION['userMessage']);echo $texte;}?></textarea>
                    <?php if(isset($_SESSION['userMessageError'])){
                        echo "<img id='croix' src='assets/img/croix.svg' title="."'".$_SESSION['userMessageError']."'"." alt='error'>";
                    }?>
                </div>
            </div>
            <!-- submit line -->
            <div class="form-row pt-5 justify-content-start">
                <div class="col-md-12 col-sm-12">
                    <button id="btnSubmit" type="submit" class=" btn btn-success">Send Form</button>
                </div>
            </div>
        </form>
        <!-- fin formulaire -->
        <!-- footer  -->
        <div class="row" style="margin-top:-15vh">
            <div class="col-lg-12" id="footer">
                <div class="wave">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="maine text-center">
                            <h3>SUBSCRIPT TO OUR NEWSLETTER HERE</h3>
                            <input type="text" class="newsletter" size=40 name="newMail" id="formNewmail" value="enter your mail here ">
                            <button class="newsSubscipte">subscribe</button>
                            <div class="mt-5 row justify-content-center align-content-center">
                                <a href="#home" class="footerAnchor">Home</a>
                                <a href="catalog.html" class="footerAnchor">Catalog</a>
                                <a href="form.html" class="footerAnchor">Contact</a>
                                <span>Suivez-nous sur</span>
                                <object type="image/svg+xml" class="ml-2" data="https://image.flaticon.com/icons/svg/145/145802.svg" width="1.5%">

                                    </object>
                                <object type="image/svg+xml" class="ml-2" data="https://image.flaticon.com/icons/svg/145/145807.svg" width="1.5%">

                                    </object>
                                <object type="image/svg+xml" class="ml-2" data="https://image.flaticon.com/icons/svg/145/145812.svg" width="1.5%">

                                    </object>
                                <object type="image/svg+xml" class="ml-2" data="https://image.flaticon.com/icons/svg/355/355992.svg" width="1.5%">

                                    </object>
                            </div>
                            <p class="address mt-3">
                                Tous les prix sont en euros, TVA en vigueur comprise. - © Copyright 2019 - Hackers poulette | Charlerois 0826.855.031, 6041 Gosselies
                            </p>
                            <div class="col-lg-12 text-left">
                                <img src="https://media.cdnws.com/_i/76280/645/3566/46/moyens-paiement.png" alt="" class="img-fluid bankImage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/action.js"></script>
    </body>

    </html>