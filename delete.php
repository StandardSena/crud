<?php
//incluindo a página config.php ultilizando a função include 
include("config.php");

//usando o metodo get para pegar a id via url
$id = $_GET['id'];

//deletando coluna na tabela pela id 
$result = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id=$id");

//redirecionando para a index.php)
header("Location:index.php");
?>

