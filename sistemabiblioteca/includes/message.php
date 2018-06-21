<?php

//inicia sessão
    session_start();
    if(isset($_SESSION['mensagem'])): ?>

    
    <script>
        window.onload = function(){
                M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
        }
    </script>

<?php
    endif;

    //limpa a sessão
    session_unset(); 

   

?>