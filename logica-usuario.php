<?php
session_start();

function usuarioLogado($email) {
    return $_SESSION["usuario_logado"];
}
function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}
function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     header("Location: index.php?falhaDeSeguranca=true");
     die();
  }
}
function logaUsuario($email) {
    $_SESSION["usuario_logado"] = $email;
}