<?php 
    include_once 'php/Global.php';
    include_once 'php/usuario.php';
    if(estaLogado()){
        header("Location: /index.php");
    }
    $erro = entrar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2><?= (isset($erro)? $erro : "") ?></h2>
        <?php
            if(isset($erro)){
                echo "<script>";
                echo "alert('{$erro}');";
                echo "</script>";
            }
        ?>
        <form method="post">
            email: <input type="text" name="email" />
            senha: <input type="password" name="senha" />
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>
