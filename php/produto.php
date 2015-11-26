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
        echo "<td><a href=''>Excluir</a></td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['valor']."</td>";
        echo "<td>".$linha['qtd']."</td>";
        echo "<td>".$linha['data_validade']."</td>";
        echo "</tr>";
    }
}