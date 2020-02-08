<?php 

include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE  FROM `usuarios` WHERE id_usuario = $id ";

$DELETE = mysqli_query($con,$sql);

header("location: aprovar_usuarios.php");
?>

