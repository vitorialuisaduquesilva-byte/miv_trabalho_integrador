<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];
    
    if (!empty($usuario) && !empty($senha)) {
        if ($usuario == "miv@gmail.com" && $senha == "senha") {
            //echo "Logou";
            //exit();    
            $_SESSION['logon'] = $usuario; 
            header("Location: telaLogin.php");
            //exit();
        }else {
            //echo "Nao logou";
            //exit();
            header("Location: telaLogin.php");
            //exit();
        }
    } 
}
?>
