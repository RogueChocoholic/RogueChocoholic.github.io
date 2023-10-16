var passChek = document.getElementById("signupPassword");
var uNAme = document.getElementById("signupEmail")

function passcheck() {
    document.getElementById("signupPassword").style.display = "block";
    document.getElementById("signupEmail").style.display = "none";
    document.getElementById("loginArrow").style.visibility = "hidden";
    document.getElementById("loginWord").style.visibility = "visible";
}
