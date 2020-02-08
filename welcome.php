<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 150px;">
	<center>
		<img src="https://cdn.dribbble.com/users/2929464/screenshots/5732611/dribble_dhl_01.gif" alt="update" width="250px" style="border-radius: 100px;">
		<br><br>
		<h3>Bem vindo <?php include "conexao.php"; $user = $_GET["email"]; $sql = "SELECT nome_usuario from usuarios where mail_user = $user"; $search = mysqli_query($con,$sql); echo $search;  ?></h3>
		<div style="margin-top: 10px;">
			<a href="home.php" class="btn btn-warning btn-sm" style="color: #fff;">ir para o controle</a>
		</div>
	</center>
</div>