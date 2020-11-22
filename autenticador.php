<?php
    session_start();
    
    //verificação de autenticação de usuário
    if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
      header('Location: index.php?login=erro_acesso_nao_autenticado');
    }
?>