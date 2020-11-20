

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

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
                  <?php } ?>
                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
              <!-- Fim Formulário Login -->

            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="script.js"></script>

  </body>

</html>