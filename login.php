<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    
    <link rel="stylesheet" href="./css/login.css">
   
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="./testLogin.php" method="POST">
        <label for="login" class="labelInput">Login de usuário:</label></BR>
        <input type="text" name="login" placeholder="Login" maxlength="12"  required >
            
            <br><br>
            <label for="login" class="labelInput">Informe sua senha:</label></BR>
            <input type="password" name="senha" placeholder="Senha" maxlength="12" required >
        
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>