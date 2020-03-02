<!DOCTYPE html>
<html lang="en">
<?php require_once "header.php" ?>
<link rel="stylesheet" href="assets/index.css">
<nav class="navbar navbar-dark bg-dark">
    <div class="indent">
      <a class="navbar-brand" href="#">
        <img src="img\deadstar\logo 1 t.png" width="30" height="30" class="d-inline-block align-top" alt="deadstar logo">
        deadstar cheats
      </a>
    </div>
    </nav>

<body style="background-color: #7910A8;">

  <div class="indent"> 
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
                  <div class="check-box">
                    <input type="checkbox" id="remeber" name="remember" class="remember"><span>remember me</span>
                  </div>

                  <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                  <div class="text-danger" style="text-align: center;font-family: 'Darker Grotesque' ;">
                    Usuário ou senha inválido(s)
                  </div>

                  <?php } ?>
                  <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                  <div class="text-danger" style="text-align: center; font-family: 'Darker Grotesque' ;">
                      Você não está logado!
                  </div>


                  <?php } ?>

                  <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                  <div class="user-register">
                    <span name="forgot"><a href="/forgot"> Forgot password</a> </i></span>
                    <span name="register"><a href="/register"> Register</a> </i></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
  </div>
    </body>
</html>