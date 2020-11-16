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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- OTHER LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- OWN CSS -->
    <link rel="stylesheet" href="../Menu/navbar.css?v=1.1">

    <!-- PAGE FUNCTIONS -->
</head>

<body>
    <!-- MENU -->
    <?php include '../Menu/menu.php'; ?>
    <!-- CONTENT -->
    <div class="container" style="margin-top: 100px;">
        <h3>Perfil: </h3>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nome">
                    <div class="input-group-append">
                        <button class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <h3>Matrículas: </h3>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat1_icon"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Matricula 1" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat2_icon"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Matricula 2" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat3_icon"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Matricula 3" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="far fa-list-alt" id="mat4_icon"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Matricula 4" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include '../Footer/footer.php'; ?>
</body>

</html>