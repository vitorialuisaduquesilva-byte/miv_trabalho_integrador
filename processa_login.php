<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
$usuario = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($usuario) && !empty($senha)) {
  if ($usuario === "miv@gmail.com" && $senha === "senha") {
    $_SESSION['logon'] = $usuario; 
     header("Location: paginaInicial.html");
    // exit;
  }else {
   header("Location: telaLogin.html");
   //exit;
  }
} 
}
?>
