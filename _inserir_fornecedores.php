<?php 

include 'conexao.php'; //chama a classe de conexão com o banco

$nomeFornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO fornec(`nome_forn`) values ('$nomeFornecedor')";

$inserir = mysqli_query($con,$sql);


?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container" style="width: 400px; margin-top: 130px;">
	<center>
		<img src="https://cdn.dribbble.com/users/791530/screenshots/6322090/ouch_illustration_animation_icons8.gif" alt="insertFornec" width="350px">
		<h3 > Fornecedor cadastrado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="listview_fornecedor.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>
