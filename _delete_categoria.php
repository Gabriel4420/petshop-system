<?php 

include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE  FROM `categoria` WHERE id = $id ";

$DELETE = mysqli_query($con,$sql);

?>

<div class="container" style="width: 400px;">
	<center>
		<img src="https://cdn.dribbble.com/users/592004/screenshots/2953817/___.gif" alt="delProd" width="350px" >
		<h3 > Categoria  deletada com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listview_categoria.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

