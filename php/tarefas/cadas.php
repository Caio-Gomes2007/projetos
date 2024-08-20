<?php
$login = $_POST['login'];
$email  = $_POST['email'];
$senha = $_POST['senha'];

require 'connect.php';

$sql = "INSERT INTO produtos (nome,valor,cor,marca)
            VALUES ('$login','$email','$senha')";

// Usa o método exec() para executar a consulta
$conn->exec($sql);
echo "<script>alert('tarefa adicionada com sucesso')</script> <a href='index.html'>voltar</a>";
