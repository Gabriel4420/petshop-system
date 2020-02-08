<?php 
include "conexao.php";

$id = $_POST['id'];
$nomeforn = $_POST['nomeforn'];


$sql = "UPDATE `fornec` SET `nome_forn`='$nomeforn' WHERE  id_forn = $id ";

$UPDATE = mysqli_query($con,$sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 150px;">
	<center>
		<img src="https://cdn.dribbble.com/users/2929464/screenshots/5732611/dribble_dhl_01.gif" alt="update" width="250px" style="border-radius: 100px;">
		<br><br>
		<h3>Fornecedor atualizado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listview_fornecedor.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>