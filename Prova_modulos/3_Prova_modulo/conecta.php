<?php

$servidor="localhost";
$usuario="root";
$senha="zhwsie94";
$bancodedados="cadastro";

$mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);

if(mysqli_connect_errno()){
    die("Houve um erro:".mysqli_connect_errno());
    exit();
}
?>