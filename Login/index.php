<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Imagens/IconSousa.png">
    <title>ParkAtHome - Aplicação para Parques de Estacionamento</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <!-- BOOTSTRAP -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf-8"></script>

    <!-- OWN CSS -->

    <link rel="stylesheet" href="main_register.css">

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
    </script>

    <!-- MODAL -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
</head>

<body onload="esconder()">
    <!-- MENU -->
    <br>
    <br>
    <br>
    <br>
    <?php include '../Menu/menu.php'; ?>
    <div class="row">
        <!-- SPACER -->
        <div class="col-sm-2">
        </div>
        <!-- CONTENT -->
        <div class="col-lg-8">
            <br>
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="Imagens/IconSousa.png" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user" id="name_icon"></i></span>
                                    </div>
                                    <input type="text" onchange="verificar()" name="nome" id="nome" class="form-control input_user" placeholder="Nome*">
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
                                <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline"
                                            style="color: #FFCC00">Lembrar os meus
                                            dados</label>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                        <b class="text-center" style="color: white">
                            * obrigatório
                        </b>
                        <b class="text-center" id="errorMessage">
                            Preencha todos os campos!
                        </b>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="button" name="button" id="registerButton" onclick="inserir()" class="btn login_btn">Registar</button>
                        </div>
                        <!-- <div class="mt-4">
                            <div class="d-flex justify-content-center links" style="color: #FFCC00">
                                Ainda não criou a sua conta?
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="#" style="color: #FFCC00; text-decoration: underline;">Registe-se</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
        <!-- SPACER -->
        <div class="col-sm-2">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php include '../Footer/footer.php'; ?>
</body>

</html>