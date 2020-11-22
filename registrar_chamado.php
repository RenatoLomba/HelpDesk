<?php

session_start();

//abre o arquivo
$arquivo = fopen('chamados.txt', 'a');

//string dos dados do chamado
$chamado = $_SESSION['id'] . '#' . $_SESSION['nome'] . '#';
foreach($_POST as $key => $value) {
    $value = str_replace('#', '-', $value);
    $chamado = "$chamado$value#";
}
$chamado = $chamado . PHP_EOL;

//escreve no arquivo
fwrite($arquivo, $chamado);

//fecha o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php?registro=sucesso');

?>