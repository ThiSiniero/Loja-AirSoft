<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../library/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body class=" text-center">
    
<?php
// Criando conexão

$servername = "localhost";
$database = "sklab3";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

// Checando se deu certo

if (!$conn) {
      die("Conecção falhou: " . mysqli_connect_error());
}
 
echo "Conectado com sucesso <br><hr>";

// Recebendo dados do formulario

    $name = $_POST["name"];
    $idade = $_POST["idade"];
    $mail = $_POST["email"];
    $tel = $_POST["tel"];
    
// Enviando dados para o banco

$sql = "INSERT INTO cadastro (Nome,Idade,Email,Tel) VALUES ('$name', '$idade', '$mail', '$tel')";
if (mysqli_query($conn, $sql)) {
      echo "Nova Indentificação criada com sucesso";
} else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);   
        
?>
<br>
<a href="index.html">Voltar ao Site</a>
</body>
</html>