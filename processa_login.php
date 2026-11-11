<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
$usuario = $_POST['email'];
$senha = $_POST['password'];

if (!empty($usuario) && !empty($senha)) {
  if ($usuario == "miv@gmail.com" && $senha  == 012345) {
     header('Location: paginaInicial.html');
     exit();
  }
} 
}
?>
