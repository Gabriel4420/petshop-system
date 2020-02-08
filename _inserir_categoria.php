<?php 
include "conexao.php";

 $categoria = $_POST['nomecategoria'];
 $sql ="INSERT INTO Categoria (nomecategoria) values ('$categoria')";
 $insert = mysqli_query($con,$sql);




 ?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container" style="width: 400px; margin-top: 130px;">
	<center>
		<img src="https://cdn.dribbble.com/users/3095516/screenshots/5946834/boi-gif.gif" alt="insertcatSuccesfull" width="250px" style="border-radius: 150px;">
		<br><br>
		<h3 > Categoria cadastrada com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listview_categoria.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>