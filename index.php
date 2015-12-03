<?php 
    include_once 'php/Global.php';
    include_once 'php/produto.php';
    include_once 'php/usuario.php';
    if(!estaLogado()){
        header("Location: /login.php");
    }
    salvar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            Nome: <input type="text" name="nome" /> <br/>
            Valor: <input type="text" name="valor" /> <br/>
            Quantidade: <input type="text" name="qtd" /> <br/>
            Data de Validade: <input type="text" name="dtVal" /> <br/>
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>