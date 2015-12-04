<?php 
    include_once 'php/Global.php';
    include_once 'php/produto.php';
    excluir_por_id();
    editar_por_id();
    editar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="nome" placeholder="nome" />
            <input type="tel" name="valor" placeholder="valor" />
            <input type="submit" value="Procurar" />
        </form>
        <table border="1">
            <?php
            if(
                !isset($_POST['nome']) and
                !isset($_POST['valor'])
            ){
                listar();
            }else{
                procurar();
            }
            ?>
        </table>
    </body>
</html>
