<?php

    //conexão   
    include_once 'php_action/db_connect.php';

    //header
    include_once 'includes/header.php';


       //select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);
        
        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
    

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Empréstimo</h3>
    <form action="php_action/update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
        <input type="text" required name="livro" id="livro" value="<?php echo $dados['livro']; ?> ">
        <label for="livro">Livro</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="text"  required name="cliente" value="<?php echo $dados['cliente']; ?>" id="cliente">
        <label for="cliente">Cliente</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="date" required name="retirada" id="retirada"  value="<?php echo $dados['retirada']; ?> ">
        <label for="retirada">Data de retirada</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="date"  required name="entrega" id="entrega" value="<?php echo $dados['entrega']; ?> ">
        <label for="entrega">Data de devolução</label>
        </div> 
        
        <button type="submit" name="btn-editar" class="btn">Atualizar</button>
        <a href="index.php" type="submit" class="btn green">Lista de Empréstimos</a>
    </form>
            
    </div>
</div>


<?php
    //footer
    include_once 'includes/footer.php';
?>