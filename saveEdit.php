<?php
    // isset -> serve para saber se uma variável está definida

    include_once('./config.php');

    if(isset($_POST['update']))
    {
        
        $codigo = $_POST['codigo'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE controlemaster SET login='$login',senha='$senha'
        WHERE codigo='$codigo'";

        $result = $conexao->query($sqlInsert);
       // print_r($result);
    }    
        header('Location: ./sistema.php');

?>
