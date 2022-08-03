function checkEmail() {
    let email = document.getElementById("email").value;
    let logEmail = document.getElementById("logEmail");

    if (email.match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
        logEmail.innerHTML = "<p style='letter-spacing: 2px; color: #14F125'>Email valide</p>";
    }else {
        logEmail.innerHTML = "<p style='letter-spacing: 2px; color: #F12814'>Email invalide</p>";
    }
}