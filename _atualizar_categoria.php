<?php 
include "conexao.php";

$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria'];


$sql = "UPDATE `categoria` SET `nomecategoria`='$nomecategoria' WHERE  id = $id ";

$UPDATE = mysqli_query($con,$sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 150px;">
	<center>
		<img src="https://cdn.dribbble.com/users/2726/screenshots/2526880/catanimate_update.gif" alt="UPDATEcat" width="250px" style="border-radius: 170px;">
		<br><br>
		<h3>Categoria Atualizada com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listview_categoria.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>