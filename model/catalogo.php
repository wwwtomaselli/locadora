<?php

$filme["nome"] = 'Star Wars IV';
$filme["categoria"] = "Ficção";
$filme["sinopse"] = "Altas aventuras no espaço";
$filme["ano"] = "1978";
$filme["tipo"] = "catalogo";
$filme["midia"] = "DVD";
$filme["disponivel"] = 3;

$lista_filmes[] = $filme;

$filme["nome"] = 'Filme2';
$filme["categoria"] = "Ação";
$filme["sinopse"] = "Filme de ação";
$filme["ano"] = "1988";
$filme["tipo"] = "catalogo";
$filme["midia"] = "BluRay";
$filme["disponivel"] = 3;

$lista_filmes[] = $filme;

$filme["nome"] = "Star Trek: Beyound";
$filme["categoria"] = "Ficção";
$filme["sinopse"] = "Terceiro filme com o reboot";
$filme["ano"] = "2016";
$filme["tipo"] = "lançamento";
$filme["midia"] = "BluRay";
$filme["disponivel"] = 4;

$lista_filmes[] = $filme;

$filme["nome"] = 'Filme 4';
$filme["categoria"] = "Comédia";
$filme["sinopse"] = "Filme de comédia";
$filme["ano"] = "2016";
$filme["tipo"] = "lançamento";
$filme["midia"] = "DVD";
$filme["disponivel"] = 3;

$lista_filmes[] = $filme;

echo json_encode($lista_filmes);