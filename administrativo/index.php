<?php include_once("includes/header.php");?>
<?php session_start()?>
<?php
            session_start();
            if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['id']) == true)) {
                unset($_SESSION['id']);
                unset($_SESSION['usuario']);
                unset($_SESSION['senha']);
                header('location: login.php');
            }

            ?>
            <div>
                <?php
                if (assert($_SESSION['id'])) {
                    echo " Olá, " . $_SESSION['usuario'] . "<br>";
                    echo "<br><a class='sair' href='sair.php'>Sair</a>";
                } else {
                    $_SESSION['msg'] = "Somente administradores";
                    header("Location: login.php");
                }
                ?>

<?php include_once("includes/footer.php");?>
