<?php 

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if($nivel == 1){

	$sql = "UPDATE usuarios set status = 'Ativo', `user_level` = 1 WHERE id_usuario = $id";
	$update = mysqli_query($con,$sql);

 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px;">
	<center>
		<h3> virou Administrador </h3>
	</center>
</div>

<?php } else if($nivel == 2){

$sql = "UPDATE usuarios set status = 'Ativo', `user_level` = 2 WHERE id_usuario = $id";
$update = mysqli_query($con,$sql);

 ?>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px;">
	<center>
		<h3>  virou funcionário </h3>
		
	</center>
</div>

<?php } ?>

<?php header("location: aprovar_usuarios.php"); ?>


 <!-- 
	

} -->