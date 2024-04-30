<?php
$nm_cliente = $_POST['nm_cliente'];
$nm_endereco = $_POST['nm_endereco'];
$nr_endereco = $_POST['nr_endereco'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$fone = $_POST['fone'];

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES (NULL, '$nm_cliente', '$nm_endereco', '$nr_endereco', '$cpf', '$cnpj', '$fone')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";
?>