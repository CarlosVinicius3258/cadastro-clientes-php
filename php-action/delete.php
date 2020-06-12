<?php
    require_once "db_connect.php";

    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
