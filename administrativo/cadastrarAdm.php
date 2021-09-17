<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include_once("includes/CadastrarAdm.php"); ?>

<main>
  <section class="login-main">
    <div class="bs-example">
      <form class="login--form" action="" method="post">
        <div class="logado">
          <?php 
          if (assert($_SESSION['id'])) {
            echo " Olá " . $_SESSION['usuario'] . ",<br> Deseja adicionar um novo Administrador? </br>";
            echo "<br><a  class='LinksAdm' href='sair.php'>Sair</a>";
            echo "<a  class='LinksAdm' href='index.php'><br>Voltar</a>";
            // echo "<a href='administradores/administradores.php'><br>Excluir</a>";
          } else {
            $_SESSION['msg'] = "Somente administradores";
            header("Location: login.php");
          }
          ?>
        </div>
        <img src="img/jean-logo-preta.png" width="20%" alt="logo da barbearia">
        <h2>Login Administrativo</h2>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" name="nomesobrenome" class="form-control" id="inputEmail" placeholder="Novo nome"
              required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Novo email" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" name="usuario" class="form-control" id="inputEmail" placeholder="Novo usuario" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Nova senha"
              required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
          </div>
          <input type="submit" name="btnCadUsuario" placeholder="Cadastrar" class="btn btn-primary">
          <input type="reset" placeholder="Redefinir" class="btn btn-primary">
        </div>
      </form>

    </div>
</main>
</section>