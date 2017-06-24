<?php
include_once "conferir-autenticacao.php";
include_once "mensagens.php"; 
$titulo =  "Cadastro de Item";
include_once "head.php"; 
?>

<body class="theme-default main-menu-animated">

	<script>var init = [];</script>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="doacao">Cadastro de Item<span class="sr-only">(current)</span></a></li>
					<li><a href="pagina-inicial.php">Página Inicial</a></li>
					<li><a href="cadastro-usuario.php">Cadastro de Usuário <span class="sr-only">(current)</span></a></li>
					<li><a href="relatorio.php">Relatório</a></li>
				</ul>
				<div>
					<h4 class="navbar-text navbar-right">Doações-SA</h4>
				</div>
			</div><!-- /.navbar-collapse -->

		</div><!-- /.container-fluid -->
	</nav>


	<!-- <form action=""> -->
	<form action="adciona-doacao.php" method="POST" onsubmit="mensagemConfirmacao();">
		<div class="panel panel-default col-md-offset-1 col-md-10">
			<div class="panel-heading">
				<h1 class="panel-title text-center">Cadastro de Item</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group no-margin-hr">
							<label class="control-label">Nome</label>
							<input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus>
						</div>
					</div>

					<div class="col-sm-2">
						<div class="form-group no-margin-hr">
							<label for="sel1">Tipo</label>
							<select class="form-control" name="tipo" id="tipo" required>
							<option>Selecione</option>
				      		<optgroup label="Roupa">
				      		<option value="Blusa">Blusa</option>
					      	<option value="Camiseta">Camiseta</option>
					      	<option value="Vestido">Vestido</option>
					      	<option>Calça</option>
					      	<option>Outro Tipo de Roupa</option>
					      	</optgroup>
					    	<optgroup label="Calçados">
				      		<option>Sapato</option>
					      	<option value="Tênis" >Tênis</option>
					      	<option value= "Botina">Botina</option>
					      	<option value="Sandália">Sandália</option>
					      	<option value="Chinelo">Chinelo</option>
					      	<option value="Outro Tipo de Calçado">Outro Tipo de Calçado</option>
					      	</optgroup>
					      	<optgroup label="Acessório">
				      		<option value="Mochila">Mochila</option>
					      	<option value="Chapéu">Chapéu</option>
					      	<option value="Boné">Boné</option>
					      	<option value="Relógio">Relógio</option>
					      	<option value="Outro Tipo de Acessório">Outro Tipo de Acessório</option>
					      	</optgroup>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group no-margin-hr">
							<label class="control-label">Tamanho</label>
							<input type="text" name="tamanho" class="form-control" placeholder="Tamanho" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group no-margin-hr">
							<label for="sel1">Gênero</label>
							<select class="form-control" name="genero" id="sel1" required>
								<option>Selecione</option>
								<option>Masculino</option>
								<option>Feminino</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group no-margin-hr">
							<label for="sel1">Faixa Etária</label>
							<select class="form-control" name="faixaEtaria" id="sel1" required>
								<option>Selecione</option>
								<optgroup label="Criança">
									<option>0 - 6</option>
									<option>6 - 12</option>
								</optgroup>
								<optgroup label="Adolescente">
									<option>12 - 16</option>
									<option>16 - 18</option>
								</optgroup>
								<optgroup label="Adulto">
									<option>18 - 25</option>
									<option>25 - 35</option>
									<option>35 - 60</option>
								</optgroup>
								<optgroup label="Idoso">
									<option>60 ou mais</option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group no-margin-hr">
							<label for="comment">Observação:</label>
							<textarea class="form-control" rows="5" name="observacao" id="comment"></textarea>
						</div>
					</div>
				</div><!-- row -->		
			</div>
			<div class="panel-footer text-right">
				<a class="btn btn-default" href="item.php">Cancelar</a>
				<button type="submite" name="cadastra" class="btn btn-primary">Cadastrar</button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		function mensagemConfirmacao(){
			alert("Cadastro Efetuado com Sucesso");
		}

	</script>

	<!-- Pixel Admin's javascripts -->
	<script src="assets/javascripts/bootstrap.min.js"></script>
	<script src="assets/javascripts/pixel-admin.min.js"></script>



	<!-- Javascript -->
	<script>
		init.push(function () {
			var options = {
				todayBtn: "linked",
				orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
			}
			$('#bs-datepicker-example').datepicker(options);

			$('#bs-datepicker-component').datepicker();

			var options2 = {
				orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
			}
			$('#bs-datepicker-range').datepicker(options2);

			$('#bs-datepicker-inline').datepicker();
		});
		window.PixelAdmin.start(init);
	</script>
</body>