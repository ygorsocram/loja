<?php include("logica-usuario.php");

$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: index.php");
die();