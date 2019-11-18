<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ParkAtHome";
	
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $nif = $_GET['nif'];
    $telefone = $_GET['numeroTelefone'];
    $nomeUtilizador = $_GET['nomeUtilizador'];
    $pw = sha1($_GET['password']);
    $matricula1 = $_GET['matricula1'];
    $matricula2 = $_GET['matricula2'];
    $matricula3 = $_GET['matricula3'];
    $matricula4 = $_GET['matricula4'];
 
    // Cria a ligação à BD
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Verifica se a ligação falhou (ou teve sucesso)
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    $sql = "INSERT INTO utilizadores (Nome, Email, NrTelemovel, NIF, NomeUtilizador, Password)
        VALUES ('$nome', '$email', $telefone, $nif, '$nomeUtilizador', '$pw')";
    $sql2 = "INSERT INTO matriculas (Matricula1, Matricula2, Matricula3, Matricula4, NomeUtilizador)
        VALUES ('$matricula1', '$matricula2', '$matricula3', '$matricula4', '$nomeUtilizador')";
 
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        echo true;
    }
    else {
        echo false;
    }
 
    mysqli_close($conn);
	
?>