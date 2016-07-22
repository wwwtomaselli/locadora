<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$conexao = new PDO("sqlite:locadora.sqlite");

$sql = "INSERT INTO catalogo (nome, sinopse, ano, tipo, midia, disponivel, categoria)" . 
"VALUES ('{$_POST['nome']}', '{$_POST['sinopse']}', {$_POST['ano']}, '{$_POST['tipo']}'," .
"'{$_POST['midia']}',{$_POST['disponivel']},'{$_POST['categoria']}')";

$conexao->exec($sql);