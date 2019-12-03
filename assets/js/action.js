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

    $("#submit").click(function(e) {
        e.preventDefault();

        $.post(
            'connexion.php', // Un script PHP que l'on va créer juste après
            {
                userFirstname: usFirstname,
                userLastname: usLastname,
                userMail: usMail,
                userSubject: usSubject,
                userMessage: usMessage,
                useeFile: usFile,
            }
        );
    });



});