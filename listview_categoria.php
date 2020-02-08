<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/5f2488fd74.js"></script>
	<title>Categorias</title>
	<style>
	#corfundo{
		background-color: #FFC133;
		color: #fff;
	}
	#corfundo:hover{
		background-color:#FF8633;
		color:#fff;
	}
	#corfornecedor{
		background-color: #179617;
		color: #fff;
	}

	#corfornecedor:hover{
		background-color:green;
		color:#fff;
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
				<form class="form-inline my-2 my-lg-0"  method="get" action="pesquisar_categoria.php">
					
					<input class="form-control mr-sm-2"  placeholder="Pesquisar" name="pesquisar" style="border-radius: 120px;">

					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pesquisar</button>
					
				</form>
			</div>
		</nav>

		<div class="container" style="margin-top: 40px;">
			<h3>Categorias Existentes</h3>

			<table class="table" style="column-span: 20px;">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nome Categoria</th>
						<th scope="col">Editar | Excluir</th>
					</tr>
				</thead>


				<?php 

				include 'conexao.php';

				// $a = $_GET['a'];

				// // Verificamos se a ação é de busca
				// if ($a == "buscar") {

				// 	// Pegamos a palavra
				// 	$palavra = trim($_POST['palavra']);

				// 	// Verificamos no banco de dados produtos equivalente a palavra digitada
				// 	$sql = mysqli_query("SELECT * FROM estoque WHERE nomeproduto LIKE '%".$palavra."%' ORDER BY nome");

				// 	// Descobrimos o total de registros encontrados
				// 	$numRegistros = mysqli_num_rows($sql);

				// 	// Se houver pelo menos um registro, exibe-o
				// 	if ($numRegistros != 0) {
				// 		// Exibe os produtos e seus respectivos preços
				// 		while ( $array = mysqli_fetch_array($busca)) {
				// 			# code...

				// 			$id_estoque = $array['id_estoque'];
				// 			$nro_produto = $array['nro_produto'];
				// 			$nomeproduto = $array['nomeproduto'];
				// 			$categoria = $array['categoria'];
				// 			$quantidade = $array['quantidade'];
				// 			$fornecedores = $array['fornecedores'];
				// 		}
				// 	// Se não houver registros
				// 	} else {
				// 		echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
				// 	}
				// }


				$sql = "SELECT * FROM `categoria` ";


				$busca = mysqli_query($con,$sql);

				while ( $array = mysqli_fetch_array($busca)) {
							# code...

					$id = $array['id'];
					$nomecategoria = $array['nomecategoria'];







					?>
					<tr>
						<td><?php echo $nomecategoria; ?></td>

						<td>
							<a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $id ?>" role="button"><i class="fas fa-edit" style="size: 2px;"></i> Editar
							</a> |<a class="btn btn-danger btn-sm" href="_delete_categoria.php?id=<?php echo $id ?>" role="button"><i class="fas fa-trash" style="size: 2px;"></i> Excluir
							</a>

						</td>


					</tr>
					<?php } ?>

				</table>

				<div class="modal fade" id="deletepopup" tabindex="-1" role="dialog" aria-hidden = "true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modal-label">Deletar</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label ="Close"></button>
							</div>
						</div>
					</div>
				</div>







				<a href="CadastrarProduto.php" class="btn btn-primary" role="button" style="border-radius: 120px;"><i class="fas fa-plus"></i> produto</a>
				<a href="adicionar_categoria.php" class="btn " role="button" style="border-radius: 120px; margin-left: 850px; margin-top: 5px;  " id="corfundo"><i class="fas fa-plus"></i> categoria</a>
				<a href="cadastrarFornecedor.php" class="btn" role="button" style="border-radius: 120px; margin-left: 500px; float:top;" id="corfornecedor"><i class="fas fa-plus"></i> Fornecedor</a>




			</div>


			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		</body>
		</html>