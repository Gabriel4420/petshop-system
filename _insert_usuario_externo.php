

<?php 
	include 'conexao.php';
	include 'script/password.php';

	$nomeusuario = $_POST['usuario'];
	$mail = $_POST['mailuser'];
	$senha = $_POST['pwduser'];
	//$nivel = $_POST['userlevel'];
	$status = 'inativo';

	$sql = "INSERT INTO usuarios (nome_usuario,mail_user,pwd_user,status) values ('$nomeusuario','$mail',sha1('$senha'),'$status') ";

	$inserir = mysqli_query($con,$sql);





 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 400px; margin-top: 130px;">
	<center>
		<img src="https://cdn.dribbble.com/users/398490/screenshots/1716348/users.gif" alt="insertUser" width="250px">
		<h3 > Usuario Cadastrado com sucesso, esperando aprovação...</h3>
		<div style="margin-top: 10px;">
			<a href="index.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>