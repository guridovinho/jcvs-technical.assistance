<?php

     //inclui conexão com o banco
    include_once 'php_action/db_connect.php';
    //header
    include_once 'includes/header.php';
    //inclui mensagem de alerta
    include_once 'includes/message.php';
    
?>
    



<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Lista de empréstimos</h3>
        <table class="striped">
            <thead>
                 <tr>
                    <th>Livro</th>
                     <th>Cliente</th>
                     <th>Data de retirada</th>
                     <th>Data de entrega</th>
                </tr>
            </thead>
        
            <tbody>
                
                <?php
                $sql = "SELECT * From clientes";
                $resultado = mysqli_query($connect, $sql);
                
                //inclui traços quando não tiver cadastros 
                if(mysqli_num_rows($resultado) > 0):
                //loop
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['livro']; ?></td>
                    <td><?php echo $dados['cliente']; ?></td>
                    <td><?php echo $dados['retirada']; ?></td>
                    <td><?php echo $dados['entrega']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i      class="material-icons">edit</i></a></td>
                    
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    
                    <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                    <div class="modal-content">
                        <h4>OPS!</h4>
                        <p>Tem certeza que deseja excluir?</p>
                    </div>
                
                    <div class="modal-footer">
                        
                        
                    <form action="php_action/delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                        <button type="submit" name="btn-deletar" class="btn red" > Sim, quero deletar</button>
                        
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </form>
                        
                        
                    </div>
               </div>
                    
                    
                    
                    
                </tr>
                <?php endwhile; 
                    else: ?>
                
                 <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                
                <?php
                    endif;
                ?> 
                
                
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar retirada</a>
        <a href="home.html" class="btn red">Voltar a página inicial</a>
    </div>
</div>


<?php
    //footer
    include_once 'includes/footer.php';
?>


  
        