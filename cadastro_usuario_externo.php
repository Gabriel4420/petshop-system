<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="width: 400px; margin-top: 50px;">
			<center><h4>Cadastro de Usuario</h4></center>
			<br>
			<form action="_insert_usuario_externo.php" method="post">
					<div class="form-group">
						<label >Usuario</label>
						<input type="text" name="usuario" class="form-control" required placeholder="por favor coloque seu nome completo">
					</div>
					<div class="form-group">
						<label >E-mail</label>
						<input type="email" name="mailuser" class="form-control" required placeholder="por favor coloque seu e-mail">
					</div>
					<div class="form-group">
						<label >Senha</label>
						<input id="txtSenha" type="password" name="pwduser" class="form-control" required placeholder="por favor coloque sua senha">
					</div>
					<div class="form-group">
						<label >Repetir Senha</label>
						<input type="password" name="pwduser2" class="form-control" required oninput="validaSenha(this)" placeholder="por favor repita sua senha">
						<small>precisa ser igual a senha digitada acima</small>
					</div>
					<!-- <div class="form-group">
						<label >Nivel de acesso</label>
						<select name="userlevel" class="form-control">
							
							<option value="1">Administrador</option>
							<option value="2">Funcionario</option>
							<option value="3">Conferente</option>
						</select>
					</div> -->
					<div style="text-align:right;">
					<button type="submit" class="btn btn-success">Cadastrar</button>
					
					</div>
					<div style="text-align:left; margin-top: -40px;">
					<a  class="btn btn-danger" href="index.php">voltar</a>
					
					</div>
			</form>
					



	</div>
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>