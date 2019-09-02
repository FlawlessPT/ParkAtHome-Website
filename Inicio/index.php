<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Imagens/IconSousa.png">
    <title>ParkAtHome - Aplicação para Parques de Estacionamento</title>
    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf-8"></script>

    <!-- OWN CSS -->
    <link rel="stylesheet" href="main_index.css">
</head>

<body>
    <!-- MENU -->
    <br>
    <br>
    <br>
    <?php include '../Menu/menu.php'; ?>
    <div class="container">
        <br>
        <!-- <div class="card" style="background-color: #89b6ff"> -->
        <h1 id="objetivos">Sobre</h1>
        <hr>
        <h3 id="objetivos">Objetivos</h3>
        <p>Park@Home é uma aplicação desenvolvida como projeto final escolar. Porém, tem como futuro
            objetivo, entrar em funcionamento no mundo real.</p>
        <br>
        <h3 class="text-center">Team Park@Home</h3>
        <br>
        <div class="d-flex justify-content-center">
            <div class="row">
                <span class="card" width="512px" height="512px" style="background-color: lightblue;">
                    <img src="Imagens/bby-me-final.png" class="img-fluid" alt="João Sousa">
                    <hr>
                    <b class="text-center" id="team-me">João Sousa</b>
                    <b class="text-center" id="role-me">Front-End & Back-End Developer</b>
                </span>
            </div>
        </div>
        <hr>
        <h1 id="download">Download</h1>
        <hr>
        <a href="app-debug.apk" download>
            <img src="Imagens/Download.png" width="100px" height="100px" class="img-fluid" alt="Download">
        </a>
        <hr>
        <h1 id="source">Source</h1>
        <hr>
        <a href="https://www.github.com/FlawlessPT/ParkAtHome" type="menu">Ver Aqui</a>
        <br>
    </div>
    <!-- </div> -->
    <br>
    <?php include '../Footer/footer.php'; ?>
</body>

</html>