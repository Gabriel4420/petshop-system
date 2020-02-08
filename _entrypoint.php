<?php 
		
		include 'conexao.php';
		include 'script/password.php';
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "SELECT  `mail_user`, `pwd_user` FROM usuarios WHERE mail_user = '$email' and status = 'Ativo' ";

		$search = mysqli_query($con, $sql);

	 	$tot = mysqli_num_rows($search);
		
	 	
	




while ($array = mysqli_fetch_array($search)) {
	# code...
	

	 $pwd = $array['pwd_user'] ; 

	 $senhadecodificada = sha1($senha) ;

	 
    	
	

   if (($tot > 0 ) && ($senhadecodificada == $pwd  ) ) {
	// 	# code...
	session_start();

	$_SESSION['usuario'] = $email;

 	header('Location: home.php');

	} else {

 	header('Location:error_userNotFound');

	} 
	
}
		


		


		
?>



