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
        <table border="1">
            <?php
                listar();
            ?>
        </table>
    </body>
</html>
