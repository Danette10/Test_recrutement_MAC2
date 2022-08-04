function checkEmail() {
    let email = document.getElementById("email").value;
    let logEmail = document.getElementById("logEmail");

    if (email.match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
        logEmail.innerHTML = "<p style='letter-spacing: 2px; color: #14F125'>Email valide</p>";
    }else {
        logEmail.innerHTML = "<p style='letter-spacing: 2px; color: #F12814'>Email invalide</p>";
    }
}

function viewPass(id) {
    let input = document.getElementById(id);
    let eyeImg = document.getElementById("eyeImg");
    let eyes = document.getElementById("eyes");

    if (input.type === "password") {
        input.type = "text";
        eyeImg.src = "../images/eyes/eyes_close.png";
    } else {
        input.type = "password";
        eyeImg.src = "../images/eyes/eyes_open.png";
    }
}

function reloadTable(){

let request = new XMLHttpRequest();
    request.open("GET", "http://localhost/Test_recrutement_MAC2/admin/getUsers.php");
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            document.getElementById("users").innerHTML = request.responseText;
        }
    }
    request.send();

}

function deleteUsers(id){

    let request = new XMLHttpRequest();
    request.open("GET", "http://localhost/Test_recrutement_MAC2/admin/checksAdmin/checkDelete.php?id=" + id);
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            if (request.responseText === "true") {
                reloadTable();
            }
        }
    }
    request.send();

}