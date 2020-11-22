<!-- Script de validação da sessão -->
<?php require_once("autenticador.php") ?>

<!-- Estrutura principal do app -->
<?php require_once("layout.php") ?>

  <div class="card-abrir-chamado">

    <!-- Verificaão da requisição do registro -->
    <?php if(isset($_GET['registro'])) { ?>
      <?php if($_GET['registro'] == 'sucesso') { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sucesso!</strong> Chamado encaminhado ao nosso banco de registros.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
    <?php } ?>

    <div class="card">
      <div class="card-header">
        Abertura de chamado
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            
            <form method="post" action="registrar_chamado.php">
              <div class="form-group">
                <label>Título</label>
                <input name="titulo" type="text" class="form-control" placeholder="Título">
              </div>
              
              <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                  <option>Criação Usuário</option>
                  <option>Impressora</option>
                  <option>Hardware</option>
                  <option>Software</option>
                  <option>Rede</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" rows="3"></textarea>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">
                    Voltar
                  </a>
                </div>

                <div class="col-6">
                  <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once("fim_layout.php") ?>