function  showpasswordslk() {
    document.getElementById("span1").classList.toggle("anilkop");
    var pw = document.getElementById("password1");

    if (pw.type == "text") {
        pw.type = "password";
    } else
    {
        pw.type = "text";
    }
}
function  showpasswordslo() {
    document.getElementById("span2").classList.toggle("ani");
    var pw = document.getElementById("password2");

    if (pw.type == "text") {
        pw.type = "password";
    } else
    {
        pw.type = "text";
    }
}

