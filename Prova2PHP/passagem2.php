<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de dados</title>
</head>
<body>
<?php

$f = $_POST["filme"];
$a = $_POST["ator"];
$p = $_POST["personagem"];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['filme']) && validar_post($_POST['ator']) && validar_post($_POST['personagem'])){
    echo '<br><br>';
    echo 'Filme: '.$_POST["filme"];
    echo '<br><br>';
    echo 'Ator: '.$_POST["ator"];
    echo '<br><br>';
    echo 'Personagem: '.$_POST["personagem"];
    /*
    Inserir os dados no banco de dados MySQL
    */
    
require_once('insert/banco.php');

// Criar Conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO filmes (filme, ator, personagem)
VALUES ('$filme', '$ator', '$personagem')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

?>
</body>
</html>