document.getElementById("formMessSubject").addEventListener("change", () => {
    if (document.getElementById("formMessSubject").value == "3") {
        document.getElementById("formMesSubjectElse").style.display = "inline";
    } else {
        document.getElementById("formMesSubjectElse").style.display = "none";
    }
})