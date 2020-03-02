<!DOCTYPE html>
<html lang="en">
<?php require_once "header.php" ?>

<body style="background-color: #7910A8;">

<?php require_once "navbar.php" ?>

  <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="auth.php" method="post">
                <div class="form-group">
                  <input name="login-user" type="text" class="form-control" placeholder="user">
                </div>
                <div class="form-group">
                  <input name="pass-user" type="password" class="form-control" placeholder="password">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                <div class="text-danger" style="text-align: center;">
                  Usuário ou senha inválido(s)
                </div>

                <?php } ?>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                 <div class="text-danger" style="text-align: center;">
                     Você não está logado!
                 </div>


                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>