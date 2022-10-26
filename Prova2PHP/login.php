<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'Luiz' and $_POST['password'] == '12345'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Luiz Fernando';
         header("location: bemvindo.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 20px sans-serif; background-color:#00d4ff;}
        .wrapper{ width: 350px; padding: 20px; }

        
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Bem-Vindo :p</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>LOGIN</label>
                <input type="text" name="username" class="form-control" value="Luiz">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>SENHA</label>
                <input type="password" name="password" class="form-control" value="12345">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Acessar">
            </div>         
        </form>
    </div>    
</body>
</html>