<?php include_once("includes/header.php");?>


<?php $erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;  // retorna erro se houver algum na url 
?>
<?php // alto reload refrex
/*
$page = $_SERVER['PHP_SELF'];
$sec = "60";
//caso queira colocar o refresh na pagina
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
*/
?>
<link rel="icon" href="../img/jean-logo-30.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="src/assets/css/login.css">
<link rel="stylesheet" href="src/assets/css/links.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<main>
    <section class="login-main">
        <div class="bs-example">
            <form class="login--form" method="POST" action="validar.php">
                <?php // definindo a vareavel global
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if (isset($_SESSION['msgcad'])) {
                    echo $_SESSION['msgcad'];
                    unset($_SESSION['msgcad']);
                }
                ?>
                <img src="../src/img/icones/telegram-cinza.png"  width="10%"alt="logo da barbearia">
                <h2>Administrativo</h2>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="usuario" class="form-control" id="inputEmail" placeholder="Digite seu usuario" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="digite sua senha" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                    </div>
                    <input type="submit" name="btnLogin" placeholder="Entrar" class="btn">
                    <input type="reset" placeholder="Redefinir" class="btn">
                </div>
                <div> 
                    <a  href="../index.php">voltar a página principal??</a>
                </div>
            </form>
        </div>
</main>
</section>
<?php include_once("includes/footer.php");?>