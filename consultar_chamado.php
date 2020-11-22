<!-- Script de validação da sessão -->
<?php require_once("autenticador.php") ?>

<?php

$chamados = [];

//consulta de chamados abertos
$arquivo = fopen('C:/xampp/app_help_desk/chamados.txt', 'r');

//percorre as linhas do arquivo
while(!feof($arquivo)) {
  //recupera a linha atual do arquivo
  $linha = fgets($arquivo);
  if($_SESSION['perfil'] == 'Usuário') {
    if($_SESSION['id'] != substr($linha, 0, 1)) {
      continue;
    }
  }
  $chamados[] = $linha;
}
fclose($arquivo);

$chamados = array_filter($chamados);

?>

<!-- Estrutura principal do app -->
<?php require_once("layout.php") ?>

  <div class="card-consultar-chamado">
    <div class="card">
      <div class="card-header">
        Consulta de chamado
      </div>
      
      <div class="card-body">

        <!-- Listagem dinâmica de chamados -->
        <?php foreach($chamados as $key => $value) { ?>
          <?php $dados = explode('#', $value); ?>
          <div class="card mb-3 bg-light">
            <div class="card-body">
              <h5 class="card-title"><?= $dados[2] ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $dados[3] ?></h6>
              <p class="card-text"><?= $dados[4] ?></p>
              <cite>Aberto por <?= $dados[1] ?></cite>
            </div>
          </div>
        <?php } ?>

        <div class="row mt-5">
          <div class="col-6">
            <a href="home.php" class="btn btn-lg btn-warning btn-block">
              Voltar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once("fim_layout.php") ?>