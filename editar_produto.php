<?php 

include "conexao.php";

$id = $_GET["id"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Editar Produto</title>
	<style>
	#tamanhoContainer{
		width: 500px;
		box-shadow: 5px;
		border: 2px;
	}

	#botao{
		background-color: #FF1168;
		color: #ffffff;
		font-weight: bolder;
	}
</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<a class="navbar-brand" href="home.php" style="margin-left: 80px; word-spacing: 20px;"><img src="https://gestaoclick.com.br/img/editor/controle-de-estoque1.png" width="30" height="30" class="d-inline-block align-top" alt=""> Estoques & Retiradas </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<li class="nav-item active">
						<a class="nav-link" href="home.php" style="color: red;">Home <span class="sr-only">(página atual)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="aprovar_usuarios.php" style="color: green;">Aprovar Usuários<span class="sr-only">(página atual)</span></a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Cadastrar 
  						</a>

  						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    					<a class="dropdown-item" href="CadastrarProduto.php">Produto</a>
    					<a class="dropdown-item" href="cadastrarFornecedor.php">Fornecedor</a>
    					<a class="dropdown-item" href="adicionar_categoria.php">Categoria</a>
  						</div>
  						</div>
					</li>
					<br>
					<li class="nav-item">
						<div class="dropdown">
						<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Visualizar 
  						</a>

  						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    					<a class="dropdown-item" href="home.php">Produto</a>
    					<a class="dropdown-item" href="listview_fornecedor.php">Fornecedor</a>
    					<a class="dropdown-item" href="listview_categoria.php">Categoria</a>
  						</div>
  						</div>
					</li>

<!-- <a class="nav-link" href="CadastrarProduto.php">Cadastrar</a> -->

				</ul>
				<a class="btn btn-warning" href="index.php" style="color: black; margin-right: 30px; border-radius: 100px;"><i class="fas fa-arrow-alt-circle-right"></i> <span class="sr-only">(página atual)</span></a>
				<form class="form-inline my-2 my-lg-0"  method="get" action="pesquisar.php">
					
					<input class="form-control mr-sm-2"  placeholder="Pesquisar" name="pesquisar" style="border-radius: 120px;">

					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pesquisar</button>
					
				</form>
			</div>
		</nav>




	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h3>EDITAR PRODUTO</h3>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
			<?php  

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($con,$sql);

			while ( $array = mysqli_fetch_array($buscar)){
				   	# code...


				$id_estoque = $array['id_estoque'];
				$nro_produto = $array['nro_produto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedores = $array['nome_fornecedor'];



				?>
				<div class="form-group">
					<label >Nro Produto</label>
					<input type="number" class="form-control" name="nroproduto" value="<?php echo $nro_produto ?>" disabled>
					<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style = "display: none;">
				</div>
				<div class="form-group">
					<label >Nome Produto</label>
					<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
				</div>

				<div class="form-group">
					<label >Categoria do produto</label>
					<select class="form-control" name="categoria"  value="<?php echo $categoria ?>" >
						<?php include "conexao.php"; 

						$sql ="SELECT * FROM Categoria  ";
						$buscar = mysqli_query($con,$sql);

						while ($array = mysqli_fetch_array($buscar)) {
						# code...
							$id = $array['id'];
							$categoria = $array['nomecategoria'];

							?>

							<option><?php echo $categoria; ?></option>

							<?php } ?>

						</select>
					</div>


					<div class="form-group">
						<label >Quantidade Produto</label>
						<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
					</div>


					<div class="form-group">
						<label >Fornecedores</label>
						<select class="form-control" name="fornecedores" >
						<?php 
								 include "conexao.php"; 

						$sql ="SELECT * FROM fornec  ";
						$buscar = mysqli_query($con,$sql);

						while ($array = mysqli_fetch_array($buscar)) {
						# code...
							$id = $array['id'];
							$fornec = $array['nome_forn'];

							?>

							<option ><?php echo $fornec; ?></option>

							<?php } ?>

						</select>
					</div>
					<div style="text-align: right;">
						<button type="submit"  class="btn btn-success btn-sm" >Salvar</button>
					</div>

					<?php } ?>

				</form>
			</div>




			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


		</body>
		</html>