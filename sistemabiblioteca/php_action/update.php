<?php

    //inicia sessão
    session_start();
   
    require_once 'db_connect.php';
    
    if(isset($_POST['btn-editar'])):
    $livro = mysqli_escape_string($connect, $_POST['livro']);
    $cliente = mysqli_escape_string($connect, $_POST['cliente']); 
    $retirada = mysqli_escape_string($connect, $_POST['retirada']); 
    $entrega = mysqli_escape_string($connect, $_POST['entrega']); 

    $id = mysqli_escape_string($connect, $_POST['id']);

    //comando sql para editar pelo id
    $sql = "UPDATE clientes SET livro = '$livro', cliente = '$cliente', retirada = '$retirada', entrega = '$entrega' WHERE id = '$id'" ; 

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('location: .../index.php');

    endif;
endif;

?>