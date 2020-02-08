<?php 

include 'conexao.php'; //chama a classe de conexão com o banco

$nroproduto = $_POST['nroproduto'];

$nomeproduto = $_POST['nomeproduto'];

$categoria = $_POST['categoria'];

$quantidade = $_POST['quantidade'];

$fornecedores = $_POST['fornecedores'];


$sql = "INSERT INTO `estoque`(`nro_produto`, `nomeproduto`, `categoria`, `quantidade`, `nome_fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedores')";

$inserir = mysqli_query($con,$sql);


?>







<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container" style="width: 400px; margin-top: 130px;">
	<center>
	<img src="https://cdn.dribbble.com/users/2321813/screenshots/7217629/media/7d9c69eaf2031046b0311b5c4939350e.gif" alt="insertSuccesfull" width="250px">
	<br><br>
		<h3 > Produto cadastrado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="home.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>

