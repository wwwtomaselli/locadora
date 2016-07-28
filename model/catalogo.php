<?php

$conexao = new PDO("sqlite:locadora.sqlite");

$sql = "SELECT * FROM catalogo";

if ($_GET['filtro'] == 'disponivel') {$sql = $sql . " WHERE disponivel > 0";}
elseif ($_GET['filtro'] == 'catalogo') {$sql = $sql . " WHERE tipo = 'catalogo'";}
elseif ($_GET['filtro'] == 'lancamento') {$sql = $sql . " WHERE tipo = 'lancamento'";}

if ($_GET['categoria'] != 'todos'){
    if ($_GET['filtro'] == 'todos')
        {$sql = $sql . " WHERE";} else {$sql = $sql . " AND";}
    $sql = $sql . " categoria like '%" . $_GET['categoria'] . "%'";
}

$dados = $conexao->query($sql);
$lista_filmes = $dados->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($lista_filmes);
