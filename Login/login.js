function verificar() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var numeroTelefone = document.getElementById("numeroTelefone").value;
    var nif = document.getElementById("nif").value;
    var nomeUtilizador = document.getElementById("nomeUtilizador").value;
    var password = document.getElementById("password").value;
    var matricula1 = document.getElementById('matricula1').value;
    var matricula2 = document.getElementById('matricula2').value;
    var matricula3 = document.getElementById('matricula3').value;
    var matricula4 = document.getElementById('matricula4').value;
    var registerButton = document.getElementById('registerButton');
    var errorMessage = document.getElementById('errorMessage');

    if (nome != "" && email != "" && numeroTelefone != "" && nif != "" && nomeUtilizador != "" && password != "" && matricula1 != "") {
        errorMessage.style.display = "none";
        registerButton.disabled = false;
    } else {
        errorMessage.style.display = "block";
        registerButton.disabled = true;
    }
}

function inserir() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var numeroTelefone = document.getElementById("numeroTelefone").value;
    var nif = document.getElementById("nif").value;
    var nomeUtilizador = document.getElementById("nomeUtilizador").value;
    var password = document.getElementById("password").value;
    var matricula1 = document.getElementById('matricula1').value;
    var matricula2 = document.getElementById('matricula2').value;
    var matricula3 = document.getElementById('matricula3').value;
    var matricula4 = document.getElementById('matricula4').value;

    var registerButton = document.getElementById('registerButton');
    var errorMessage = document.getElementById('errorMessage');

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    xhttp.open("GET", "register.php?nome=" + nome + "&email=" + email + "&numeroTelefone=" + numeroTelefone + "&nif=" + nif + "&nomeUtilizador=" + nomeUtilizador + "&password=" + password + "&matricula1=" + matricula1 + "&matricula2=" + matricula2 + "&matricula3=" + matricula3 + "&matricula4=" + matricula4, true);
    xhttp.send();
    nome = '';
    email = '';
    numeroTelefone = '';
    nif = '';
    nomeUtilizador = '';
    password = '';
    matricula1 = '';
    matricula2 = '';
    matricula3 = '';
    matricula4 = '';
}

function esconder() {
    var registerButton = document.getElementById('registerButton');
    var errorMessage = document.getElementById('errorMessage');
    errorMessage.style.display = "none";
    registerButton.disabled = true;
}