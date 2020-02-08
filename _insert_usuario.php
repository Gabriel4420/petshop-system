

<?php 
	include 'conexao.php';
	include 'script/password.php';

	$nomeusuario = $_POST['usuario'];
	$mail = $_POST['mailuser'];
	$senha = $_POST['pwduser'];
	$nivel = $_POST['userlevel'];
	$status = 'Ativo';

	$sql = "INSERT INTO usuarios (nome_usuario,mail_user,pwd_user,user_level,status) values ('$nomeusuario','$mail',sha1('$senha'),$nivel,'$status') ";

	$inserir = mysqli_query($con,$sql);





 ?>

 <div class="container" style="width: 400px;">
	<center>
		<h3 > Usuario Cadastrado com sucesso</h3>
		<div style="margin-top: 10px;">
			<a href="index.php" class="btn btn-warning btn-sm" style="color: #fff;">voltar</a>
		</div>
	</center>
</div>