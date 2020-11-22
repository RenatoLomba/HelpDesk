<?php

//inicio da SESSION
session_start();

$usuario_existe = false;
$senha_correta = false;
$id_usuario = null;
$_SESSION['autenticado'] = false;

//usuários do sistema
$usuarios_app = [
    ['id' => 1, 'nome' => 'Adm', 'email' => 'adm@teste.com.br', 'senha' => 'root', 'perfil' => 'Administrativo'],
    ['id' => 2, 'nome' => 'User', 'email' => 'user@teste.com.br', 'senha' => 'root', 'perfil' => 'Administrativo'],
    ['id' => 3, 'nome' => 'Renato', 'email' => 'renato@teste.com.br', 'senha' => '1234', 'perfil' => 'Usuário'],
    ['id' => 4, 'nome' => 'Matthew', 'email' => 'matthew@teste.com.br', 'senha' => '1234', 'perfil' => 'Usuário'],
];

//validação do usuário
foreach($usuarios_app as $key => $value) {

    if($_POST['email'] == $value['email']) {
        $usuario_existe = true;
        if($_POST['senha'] == $value['senha']) {
            $senha_correta = true;
            $_SESSION['id'] = $value['id'];
            $_SESSION['nome'] = $value['nome'];
            $_SESSION['perfil'] = $value['perfil'];
        }
    }

}

//autenticação
if($usuario_existe && $senha_correta) {
    $_SESSION['autenticado'] = true;
    header('Location: home.php');
} else if($usuario_existe && !$senha_correta) {
    header('Location: index.php?login=erro_senha&email=' . ($_POST['email']));
} else {
    header('Location: index.php?login=erro_email');
}

?>