<?php
if(file_exists("Global.php")){
    include_once 'Global.php';
}else{
    include_once 'php/Global.php';
}

function salvar() {
    if(
        isset($_POST['nome']) and
        isset($_POST['valor']) and
        isset($_POST['qtd']) and
        isset($_POST['dtVal'])
    ){
        $SQL = "INSERT INTO `produto`(`nome`, `valor`, `qtd`, `data_validade`) VALUES (:nome, :valor, :qtd, :dtVal);";
        $preparo = conexao()->prepare($SQL);
        $preparo->bindValue(":nome", $_POST['nome']);
        $preparo->bindValue(":valor", $_POST['valor']);
        $preparo->bindValue(":qtd", $_POST['qtd']);
        $preparo->bindValue(":dtVal", $_POST['dtVal']);
        $preparo->execute();
    }
}

function listar() {
    $SQL = "Select * from Produto WHERE 1;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while($linha = $preparo->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td><a href='?excluir={$linha['id']}'>Excluir</a></td>";
        echo "<td><a href='?editar={$linha['id']}'>Editar</a></td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['valor']."</td>";
        echo "<td>".$linha['qtd']."</td>";
        echo "<td>".$linha['data_validade']."</td>";
        echo "</tr>";
    }
}


function excluir_por_id() {
    if(isset($_GET['excluir'])){
        $id = $_GET['excluir'];
        $SQL = "DELETE FROM Produto WHERE id=:ID;";
        $prepare = conexao()->prepare($SQL);
        $prepare->bindValue(":ID", $id);
        $prepare->execute();
    }
}

//https://github.com/Pedro-Soares-32/Controle_de_Estoque_V1