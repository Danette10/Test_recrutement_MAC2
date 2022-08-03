function checkEmail() {
    let logEmail = document.getElementById("logEmail");
    let email = document.getElementById("email").value;

    // Verifie si l'email est valide
    if (email.match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
        logEmail.innerHTML = "<p style='color: #14F157; letter-spacing: 2px'>Email valide</p>";
    }else {
        logEmail.innerHTML = "<p style='color: #F70D0D; letter-spacing: 2px'>Email invalide</p>";
    }

}