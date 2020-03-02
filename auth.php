<?php
    //inicio da session
    session_start();

    $user_auth = false;

    //$users_app = array file(string $filename[, int $flags[, resource $context]])
    $user_app = array(
        array(
            'login'=> 'admin', 'password'=>'admin'),
        array(
            'login'=> 'user1', 'password'=>'user1'),
        array(
            'login'=> 'mod', 'password'=> 'mod' )
        );

    foreach($user_app as $user){
        if($user['login'] == $_POST['login-user'] && $user['password'] == $_POST['pass-user']){
            $user_auth = true;
        }
    }
    if($user_auth){
        echo 'Usuário autenticado.';

        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        header('Location: home.php');
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
      }
?>