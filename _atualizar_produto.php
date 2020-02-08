<?php 
include "conexao.php";
$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedores =$_POST['fornecedores'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto', `categoria` = '$categoria', `quantidade` = '$quantidade' , `nome_fornecedor` = '$fornecedores' WHERE  id_estoque = $id ";

$UPDATE = mysqli_query($con,$sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 130px;">
	<center>
		<img src="https://cdn.dribbble.com/users/145449/screenshots/4485237/dribbble.gif" alt="updateproduct" width="350px" style="border-radius: 100px; border-top: 100px;">
		<br><br>
		<h3>Produto atualizado com sucesso</h3>

		<div style="margin-top: 10px;">
			<a href="home.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>