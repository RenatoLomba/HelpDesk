<?php

$usuario_existe = false;
$senha_correta = false;

//usuários do sistema
$usuarios_app = [
    ['email' => 'adm@teste.com.br', 'senha' => 'root'],
    ['email' => 'user@teste.com.br', 'senha' => '1234'],
];

//validação do usuário
foreach($usuarios_app as $key => $value) {

    if($_POST['email'] == $value['email']) {
        $usuario_existe = true;
        if($_POST['senha'] == $value['senha']) {
            $senha_correta = true;
        }
    }

}

//autenticação
if($usuario_existe && $senha_correta) {
    echo 'Usuário autenticado';
} else if($usuario_existe && ($senha_correta == false)) {
    header('Location: index.php?login=erro_senha&email=' . ($_POST['email']));
} else {
    header('Location: index.php?login=erro_email');
}

?>