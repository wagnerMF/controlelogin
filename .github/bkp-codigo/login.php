<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 12px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius:9px;
            margin: 5px 0 0 0;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        @media (max-width: 415px){
            div {
                background-color: rgba(0, 0, 0, 0.6);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 80px;
                border-radius: 15px;
                color: #fff;
            }

        
            input{
                padding: 12px;
                border: none;
                outline: none;
                font-size: 15px;
                border-radius:9px;
                margin: 5px 0 0 0;
            }
            .inputSubmit{
                background-color: dodgerblue;
                border: none;
                padding: 15px;
                width: 90%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
                
            }
            .inputSubmit:hover{
                background-color: deepskyblue;
                cursor: pointer;
            }


        }


    </style>
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