document.getElementById("formMessSubject").addEventListener("change", () => {
    if (document.getElementById("formMessSubject").value == "3") {
        document.getElementById("formMesSubjectElse").style.display = "inline";
    } else {
        document.getElementById("formMesSubjectElse").style.display = "none";
    }
})

/* vérification formulaire */
$(document).ready(function() {
    let usFirstname = "";
    let usLastname = "";
    let usMail = "";
    let usSubject = "";
    let usSubjectAlt = "";
    let usMessageSubject = "";
    let usMessage = "";
    let usFile = "";
    let usGender="";
    let usCountry="";
    let flag = 0;
    // we catch the variable firstname
    $('#idFirstname').on('input', function() {
        usFirstname = $("#idFirstname").val().replace(/^\s+|\s+$/g, "");
    });
    // We catch the variable lastname 
    $('#idLastname').on('input', function() {
        usLastname = $("#idLastname").val().replace(/^\s+|\s+$/g, "");;
    });

    // we checked the mail and ad in the variable
    $('#idMail').on('input', function() {
        usMail = ($("#idMail").val());
        let patternMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let mailOk = patternMail.test(usMail);
        if (mailOk === false) {
            $('#idMail').css('border', '1px solid red');
        } else {
            $('#idMail').css('border', '1px solid green');
        }
    });
    // we catch the title
    $('#formMessSubject').on('input', function() {
        usSubject = ($("#formMessSubject").val());
        if (usSubject > 0) {
            switch (usSubject) {
                case "1":
                    usMessageSubject = "Technical Support";
                    break;
                case "2":
                    usMessageSubject = "Commercial Support";
                    break;
                case "3":
                    usMessageSubject = $('#formMesSubjectElse').val().replace(/^\s+|\s+$/g, "");
                    break;
            }
        }
    });
    // if other subject we catch the user alternative subject
    $('#formMesSubjectElse').on('input', function() {
        usMessageSubject = $('#formMesSubjectElse').val().replace(/^\s+|\s+$/g, "");
    });
    // We catch the message
    $('#idformMessage').on('input', function() {
        usMessage = $('#idformMessage').val().replace(/^\s+|\s+$/g, "");
    });

    // we catch the country
    $('#idCountry').on('input', function() {
        usCountry = ($("#idCountry").val());
        if (usCountry != "none") {
            switch (usCountry) {
                case "Australia":
                    usCountry = "Australia";
                    break;
                case "Belgium":
                    usCountry = "Belgium";
                    break;
                case "Brazil":
                    usCountry = "Brazil";
                    break;
                case "Canada":
                    usCountry = "Canada";
                    break;
                case "China":
                    usCountry = "China";
                    break;
                case "Denmark":
                    usCountry = "Denmark";
                    break;
                case "France":
                    usCountry = "France";
                    break;
                case "Germany":
                    usCountry = "Germany";
                    break;
                case "Italy":
                    usCountry = "Italy";
                    break;
                case "Netherlands":
                    usCountry = "Netherlands";
                    break;
                case "Portugal":
                    usCountry = "Portugal";
                    break;
                case "Sweden":
                    usCountry = "Sweden";
                    break;
                case "Switzerland":
                    usCountry = "Switzerland";
                    break;
            }
        }
    });

    // we catch the gender
    $('#idGender').on('input', function() {
        usGender = ($("#idGender").val());
        if (usGender != "0") {
            switch (usGender) {
                case "man":
                    usGender = "man";
                    break;
                case "woman":
                    usGender = "woman";
                    break;
            }
        }
    });

    $("#submit").click(function(e) {
        e.preventDefault();

        $.post(
            '/connexion.php', // Un script PHP que l'on va créer juste après
            {
                userFirstname: usFirstname,
                userLastname: usLastname,
                userCountry: usCountry,
                userGender: usGender,
                userMail: usMail,
                userSubject: usSubject,
                userMessage: usMessage,
                useeFile: usFile,
            }
        );
    });



});