
<!-- Estrutura principal do app -->
<?php require_once("layout.php") ?>

  <div class="card-login">
    <div class="card">

      <div class="card-header">
        Login
      </div>

      <div class="card-body">

        <!-- Ínicio Formulário Login -->
        <form action="validar_login.php" method="post">
          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
          </div>

          <!-- //verifica se o GET possui o parametro 'login' -->
          <?php if(isset($_GET['login'])) { ?>
            <?php if($_GET['login'] == 'erro_senha') { ?>
              <script>
                document.getElementById("senha").classList.add("border-danger");
                document.getElementById("email").value = '<?= $_GET['email'] ?>';
              </script>
              <div class="text-danger">
                Senha inválida
              </div>
            <?php } else if($_GET['login'] == 'erro_email') { ?>
              <script>
                document.getElementById("email").classList.add("border-danger");
                document.getElementById("senha").classList.add("border-danger");
              </script>
              <div class="text-danger">
                Usuário não encontrado
              </div>
            <?php } else if($_GET['login'] == 'erro_acesso_nao_autenticado') { ?>
              <script>
                document.getElementById("email").classList.add("border-danger");
                document.getElementById("senha").classList.add("border-danger");
              </script>
              <div class="text-danger">
                Autentique-se antes de acessar o conteúdo
              </div>
            <?php } ?>
          <?php } ?>

          <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
        </form>
        <!-- Fim Formulário Login -->

      </div>

    </div>
  </div>

<?php require_once("fim_layout.php") ?>