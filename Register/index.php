<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../Imagens/IconSousa.png">
    <title>ParkAtHome - Aplicação para Parques de Estacionamento</title>

    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- OTHER LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- OWN CSS -->
    <link rel="stylesheet" href="../Menu/navbar.css?v=1.1">
    <link rel="stylesheet" href="main_register.css?v=1.1">

    <script>
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
                    document.getElementById("nome") = '';
                    document.getElementById("email") = '';
                    document.getElementById("numeroTelefone") = '';
                    document.getElementById("nif") = '';
                    document.getElementById("nomeUtilizador") = '';
                    document.getElementById("password") = '';
                    document.getElementById('matricula1') = '';
                    document.getElementById('matricula2') = '';
                    document.getElementById('matricula3') = '';
                    document.getElementById('matricula4') = '';
                }
            };
            xhttp.open("GET", "register.php?nome=" + nome + "&email=" + email + "&numeroTelefone=" + numeroTelefone + "&nif=" + nif + "&nomeUtilizador=" + nomeUtilizador + "&password=" + password + "&matricula1=" + matricula1 + "&matricula2=" + matricula2 + "&matricula3=" + matricula3 + "&matricula4=" + matricula4, true);
            xhttp.send();
        }

        function esconder() {
            var registerButton = document.getElementById('registerButton');
            var errorMessage = document.getElementById('errorMessage');
            errorMessage.style.display = "none";
            registerButton.disabled = true;
        }
    </script>
</head>

<body onload="esconder()">
    <!-- MENU -->
    <?php include '../Menu/menu.php'; ?>
    <div class="container" style="margin-top: 150px; margin-bottom: 219px">
        <div class="row">
            <div class="col-sm-7">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user" id="name_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="nome" id="nome" class="form-control" placeholder="Nome*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-at" id="email_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="email" id="email" class="form-control input_user" placeholder="Email*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-mobile-alt" id="phone_number_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="numeroTelefone" id="numeroTelefone" class="form-control input_user" placeholder="Número Telefone*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-id-card" id="nif_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="nif" id="nif" class="form-control input_user" placeholder="NIF*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat1_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="matricula1" id="matricula1" class="form-control input_pass" placeholder="Matricula 1*" maxlength="8">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat2_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="matricula2" id="matricula2" class="form-control input_pass" placeholder="Matricula 2" maxlength="8">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat3_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="matricula3" id="matricula3" class="form-control input_pass" placeholder="Matricula 3" maxlength="8">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat4_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="matricula4" id="matricula4" class="form-control input_pass" placeholder="Matricula 4" maxlength="8">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user" id="username_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="nomeUtilizador" id="nomeUtilizador" class="form-control input_user" placeholder="Nome Utilizador*" maxlength="255">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key" id="password_icon"></i></span>
                    </div>
                    <input type="password" onchange="verificar()" name="password" id="password" class="form-control input_pass" placeholder="Password*">
                </div>
                <b class="d-flex justify-content-end" style="color: black">
                    * obrigatório
                </b>
                <b class="text-center text-black" id="errorMessage">
                    Preencha todos os campos!
                </b>
                <div class="d-flex justify-content-end">
                    <button class="btn bg-warning w-25 mt-3" type="button" id="registerButton" onclick="inserir()">Registar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include '../Footer/footer.php'; ?>
</body>

</html>