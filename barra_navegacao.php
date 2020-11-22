<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    App Help Desk
    </a>

    <!-- Verifica se o usuário está logado, para poder aparecer o botao de Logoff -->
    <?php if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']) { ?>
        <ul class="navbar-nav">
            <li class="nav-item"><h5><?= $_SESSION['nome']; ?></h5></li>
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">
                    Sair<i style="margin-left: 5px;" class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    <?php } ?>

</nav>