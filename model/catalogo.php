<?php

$conexao = new PDO("sqlite:locadora.sqlite");
$sql = "SELECT * FROM catalogo";
$dados = $conexao->query($sql);
//$lista_filmes = $dados->fetchAll();
$lista_filmes = $dados->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($lista_filmes);