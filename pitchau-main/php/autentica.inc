<?php
    session_start();
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(!hash_equals($senha,$usuario["senha"])){
                unset($_SESSION[$username]);
                unset($_SESSION[$senha]);
        header("Location: ../paginas/login.php");
        exit;
    }
    else{
        include "conecta_mysqli.inc";
        $sql = "SELECT * FROM usuarios WHERE username = '$username';";
        $res = mysqli_query($mysqli,$sql);

        /* Testa se não encontrou o username */
        if (mysqli_num_rows($res) != 1){
            unset($_SESSION[$username]);
            unset($_SESSION[$senha]);
            $_SESSION['erro_login'] = "Você não fez o login!";
            header("Location: form_login.php");
            exit;
        }
        else {
            $usuario = mysqli_fetch_array($res);

            /* Testa se a senha está errada */
            //if ($senha != $usuario["senha"]){
            if(!hash_equals($senha,$usuario["senha"])){
                unset($_SESSION[$username]);
                unset($_SESSION[$senha]);
                $_SESSION['erro_login'] = "Você não fez o login!";
                header("Location: form_login.php");
                exit;
            }
        }
        mysqli_close($mysqli);
    }
}
?>