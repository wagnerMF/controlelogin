<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIte wagner</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            width: 300px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }

        h2{
            margin-top:15%;
        }

            @media (max-width: 430px){
                    .box{
                        display: flex;
                        flex-direction: row; 
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        width: 300px;
                        transform: translate(-50%,-50%);
                        background-color: rgba(0, 0, 0, 0.6);
                        padding: 35px;
                        border-radius: 10px;
                        
                    }
                    a{
                    display: flex;
                    flex-direction: column;  
                    flex-wrap: nowrap; 
                    width: 50%;   
                    text-decoration: none;       
                    color: white;
                    border: 3px solid dodgerblue;
                    border-radius: 10px;
                }        
                .login{
                    width: 40%;   
                }
                        

                .cadastrar{
                    width: 40%;   
                }
              
                h2{
                margin-top:50%;
            }

        

            a:hover{
                background-color: dodgerblue;
            }
         
         
        }

    </style>
</head>
<body>
    
<h2>WMF Autenticação Cliente</h2>
<div class="box">
        <a href="login.php" class = "login">Login</a>
        <a href="formulario.php" class="cadastrar">Cadastre-se</a>
    </div>
</body>
</html>