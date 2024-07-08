<?php
require "connection.php";

if (isset($_POST['nome'])) {
    if (
        $_POST['nome'] != null ||
        $_POST['email'] != null
        || $_POST['password'] != null
    ) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO usuarios(nome, email, senha)
VALUES ('$nome','$email','$password');";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            //add cookies e session
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
        header("Location: ../Html/paginaInicial.html");
    }
}