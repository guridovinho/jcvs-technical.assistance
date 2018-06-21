<?php
    //header
    include_once 'includes/header.php';
?>
    

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Empréstimo</h3>
    <form action="php_action/create.php" method="post">
        <div class="input-field col s12">
        <input type="text" name="livro" id="livro" required>
        <label for="livro">Livro</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="text" name="cliente" id="cliente" required>
        <label for="cliente">Cliente</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="date" name="retirada" id="retirada" required>
        <label for="retirada">Data de retirada</label>
        </div>    
    
        
        <div class="input-field col s12">
        <input type="date" name="entrega" id="entrega" required>
        <label for="entrega">Data de devolução</label>
        </div> 
        
        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        <a href="index.php" type="submit" class="btn green">Lista de Empréstimos</a>
    </form>
            
    </div>
</div>


<?php
    //footer
    include_once 'includes/footer.php';
?>