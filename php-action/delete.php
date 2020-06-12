<?php
require_once "db_connect.php";
session_start();
if (isset($_GET['id'])) :

    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "DELETE FROM clientes where id='$id' ";
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Sucesso ao deletar cliente!!";
        header('Location: ../index');
    else :
        $_SESSION['mensagem'] = "Falha ao deletar cliente!!";
        header('location: ../index');
    endif;

endif;
