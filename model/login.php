<?php

session_start();

$conexao = new PDO("sqlite:locadora.sqlite");

//usuario: eumesmo
//senha: eumesmo
$sql = "SELECT * FROM usuario WHERE login = ? AND senha = ?";

$salt = 'pindamonhangaba';
$login = sha1($_POST['password'] . $salt);

$prepare = $conexao->prepare($sql);
$resultado  = $prepare->execute(array($_POST['username'],$login));
$usuario = $prepare->fetch(PDO::FETCH_ASSOC);

//'$time': 0, ou 1 semana após agora (em segundos)

if ($usuario != false){
    $time = (isset($_POST['remember']))? (mktime() + 7 * 24 * 60 * 60) : 0;
    setcookie('locadora', json_encode($usuario), $time, '/');
    echo '{"status": "ok"}';
} else {
    echo '{"status": "erro", "msg":"Usuário ou senha incorretos" }';
}
