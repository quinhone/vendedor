<?php

$nome = $_POST['nome'];
$qtd = $_POST['Quantidade'];
$valor = $_POST['price'];


$host='localhost';
$user='root';
$pass='';
$dbname='mercado';

$conn = new mysqli($host, $user, $pass, $dbname);

$sql= "INSERT INTO frutas (nome, quantidade, preco ) VALUES ('$nome', $qtd, $valor)";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
