<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">

  @media screnn and (max-width: 197px){
    body{
      width: 150px;
       margin-left: 200px;
    }
  }
  
  @media screen and (max-width: 399px) {

    body{

      width: 100px;
      margin-left: -500px;
      column-gap: 2px;

    }
    
    img{
       margin-left: 10px;
    }

    h3{
      width: 450px;
      margin-left: -150px;
    }

    form{
      width: 300px;
    }
    
    div#tamanho{
       width: 350px;
       margin-left: 300px;

    }

     a#btnl{
      width: 250px;
      margin-left:10px;
      color: white;
      justify-content: center;
    }
    
  }

  @media screen and (min-width: 400px) {
  
  body{

      width: 200px;
      margin-left: -500px;
      column-gap: 2px;

    }
    
    img{
       margin-left: 10px;
    }

    h3{
      width: 450px;
      margin-left: -150px;
    }

    form{
      width: 300px;
    }
    
    div#tamanho{
       width: 350px;
       margin-left: 300px;

    }

     a#btnl{
      width: 250px;
      margin-left:10px;
      color: white;
      justify-content: center;
    }
    

  
  
  }
  
  /*maior que 400*/

  body{
  width:950px;
  margin-left: 150px;

  }

		#tamanho{
			width: 500px;
			position: absolute;
      margin-left: 400px;
      margin-top: 20px;
      background-image: linear-gradient(-90deg, #262626, #4d4d4d);
      border-radius: 30px;
      border: #f3f3f3 solid 2px;
      -webkit-box-shadow: 26px 6px 18px 6px rgba(66,61,66,1);
      -moz-box-shadow: 26px 6px 18px 6px rgba(66,61,66,1);
      box-shadow: 26px 6px 18px 6px rgba(66,61,66,1);
		}

    #btnl{
      width: 300px;
      margin-left: 100px;
      color: white;
    }
    #btnl:hover{
        background-color: #262626;
        border-radius: 10px;
    }

    .text{
      
      margin-top: 30px;
      margin-left: 420px;
      color: white;
    }

    #grad {
  background-image: linear-gradient(-90deg,#d9d9d9, #999999);
}

  #box{
    border-radius: 90px;
  }
	</style>
	<title>Login</title>
</head>


<body id="grad" width="100%">


	
<div style="padding: 10px;" width="100%">
  <center>
    <img src="imagens/cadeado.png" id="img" width="100px" height="100px" style="margin-top: 20px;">
  </center>

  <div class="text" width="100%" >
  <h3>Bem Vindo ao Sistema de Estoque </h3>
  </div>

<div id="tamanho" width="100%">
  <form class="px-4 py-3" action="_entrypoint.php" method="post" width="100%">
    <div class="form-group">
      <label style="color: white">email</label>
      <input type="email" name="email" class="form-control" id="box" placeholder="email@exemplo.com" style="width: 300px;">
    </div>
    <div class="form-group">
      <label style="color: white" >Senha</label>
      <input type="password" name="senha" class="form-control" id="box" placeholder="Digite sua senha" style="width: 300px;">
    </div>
    <br>
    <div style="text-align: center; padding:5px; margin-left: 30px; ">
    <button type="submit" class="btn btn-primary">Entrar</button>
    </div>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" id="btnl" href="cadastro_usuario_externo.php">Novo, por aqui? Regitre-se.</a>
  </div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>