<?php
    session_start();

    $usuario = null;
    $senha = null;

    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $resultado = login($usuario, $senha);

        if($resultado <> null){
            $_SESSION['logado'] = 1;
            setcookie("usuario",$usuario,time()+3600);
            header('location: home');
        } else {
            $_SESSION['logado'] = 0;
            echo "Usuario ou senha invalidos";
        }

    }
?>

<div class="col-md-4 col-md-offset-4">
    <form action="login" method="post">
        <h2 class="form-signin-heading">Login</h2>
        <input class="form-control" name="usuario" placeholder="Usuario..."
               required="true" autofocus="true" type="text">
        <input class="form-control" name="senha" placeholder="Senha..."
               required="true" type="password">
        <!--<label class="checkbox">
            <input value="remember-me" type="checkbox"> Remember me
        </label> -->
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
    </form>
</div>
