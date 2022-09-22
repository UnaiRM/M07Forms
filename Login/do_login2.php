<?php

$user = $_POST["us"];
$password = $_POST["pw"];

$diccionario = array(
    "manolo" => "1234",
    "mariano" => "qwerty",
    "unai" => "4321",
    "jose" => "papa",
    "antonio" => "mama",
    "pedro" => "paiap",
    "juan" => "casa",
    "eli" => "repa",
    "marta" => "sepa",
);

$contraseñas = array_values($diccionario);
$usuarios = array_keys($diccionario);
$resultado;
for ($i = 0; $i<count($usuarios);$i++){
    if ($user == $usuarios[$i]){
        if ($password == $diccionario[$user]){
            $resultado = 1;
        }else{
            $resultado = 2;
        }
    }
}

if ($resultado==1){
    echo "Te has logeado correctamente " .$user;
}elseif($resultado == 2){
    echo "El usuario se encuentra en la base de datos, pero la contraseña es incorrecta!";
}else{
    echo "Usuario incorrecto!";
};


?>