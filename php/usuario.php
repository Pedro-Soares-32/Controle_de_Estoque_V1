<?php
if(file_exists("Global.php")){
    include_once 'Global.php';
}else{
    include_once 'php/Global.php';
}


function estaLogado() {
    if(isset($_SESSION['usuario'])){
        return true;
    }else{
        return false;
    }
}

function entrar() {
    if(
        isset($_POST['email']) and
        isset($_POST['senha'])
    ){
        $SQL = "SELECT * FROM Usuario WHERE email=:email and senha=:senha;";
        $prepare = conexao()->prepare($SQL);
        $prepare->bindValue(":email", $_POST['email']);
        $prepare->bindValue(":senha", $_POST['senha']);
        $prepare->execute();
        if($prepare->rowCount() == 1){
            $_SESSION['usuario'] = $prepare->fetch(PDO::FETCH_ASSOC);
            header("Location: /index.php");
        }else{
            $erro = "Deu merda!";
        }
    }
}