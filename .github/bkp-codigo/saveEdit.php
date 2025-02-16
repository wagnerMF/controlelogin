<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');

    if(isset($_POST['update']))
    {
        
        $id = $_POST['id'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE usuarios SET login='$login',senha='$senha'
        WHERE id='$id'";

        $result = $conexao->query($sqlInsert);
       // print_r($result);
    }    
        header('Location: sistema.php');

?>