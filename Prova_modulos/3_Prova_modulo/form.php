<?php

session_start();
include_once("conecta.php");

$id = 0;
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];


if (empty($_POST["nome"])) {
    $_SESSION['vazio_nome'] = "Campo nome é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_nome'] = $_POST["nome"];
}

if (empty($_POST["telefone"])) {
    $_SESSION['vazio_telefone'] = "Campo telefone é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_telefone'] = $_POST["telefone"];
}

if (empty($_POST["email"])) {
    $_SESSION['vazio_email'] = "Campo email é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_email'] = $_POST["email"];
}


if (empty($_POST["endereco"])) {
    $_SESSION['vazio_endereco'] = "Campo endereco é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_endereco'] = $_POST["endereco"];
}

if (empty($_POST["cidade"])) {
    $_SESSION['vazio_cidade'] = "Campo cidade é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_cidade'] = $_POST["cidade"];
}

if (empty($_POST["estado"])) {
    $_SESSION['vazio_estado'] = "Campo estado é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_estado'] = $_POST["estado"];
}

if (empty($_POST["cep"])) {
    $_SESSION['vazio_cep'] = "Campo cep é obrigatorio";
    $url = 'http://localhost/prova/test_2/';
        echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = $url'>
    ";
}else{
    $_SESSION['value_cep'] = $_POST["cep"];
}


//echo "$nome";
//echo "$telefone";
//echo "$email";
//echo "$endereco";
//echo "$complemento";
//echo "$cidade";
//echo  "$estado";
//echo "$cep";

$sql = $mysqli->prepare("insert into formcadastro values (?,?,?,?,?,?,?,?,?)");

$sql->bind_param("issssssss", $id, $nome, $telefone, $email, $endereco, $complemento, $cidade, $estado, $cep);

$sql->execute();

$sql->store_result();

$result = $sql->affected_rows;

/*if ($result > 0) {
    echo "Dados Inseridos com Sucesso!";
} else {
    echo "Houve um erro";
}*/
