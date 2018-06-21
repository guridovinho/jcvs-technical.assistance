<?php

    //inicia sessão
    session_start();
   
    require_once 'db_connect.php';

    //se clicou cadastrar, inclui os dados no banco
    if(isset($_POST['btn-cadastrar'])):
    //filtra os dados com a função e passa por parametros
    $livro = mysqli_escape_string($connect, $_POST['livro']);
    $cliente = mysqli_escape_string($connect, $_POST['cliente']); 
    $retirada = mysqli_escape_string($connect, $_POST['retirada']); 
    $entrega = mysqli_escape_string($connect, $_POST['entrega']); 

    $sql = "INSERT INTO clientes (livro, cliente, retirada, entrega) VALUES ('$livro', '$cliente', '$retirada', '$entrega')";

    //alerta
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('location: .../index.php');

    endif;
endif;

?>