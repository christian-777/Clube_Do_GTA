<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Clube Do GTA</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body class="body">
		<div class="login-form col-xs-10 offset-xs-1 col-sm-5 offset-sm-1 col-md-10 offset-md-1">
			<div class="clube">
				<a href="home.php" data-toggle="modal" data-target="#"><h1 class="h1 col-xs-5 offset-xs-1">Clube Do GTA</h1></a>
			</div>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="NovoUsuario">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Isso aqui é so pros PowerRangers</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="cadastro.php" method="POST">
						<div class="modal-body">
								<div class="row">
									<div class="form-group col-sm-12 col-xs-12">
										<label>Nominho please:</label>
										<input type="text" name="nome" id="nome" class="form-control" required="required"/>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label>Senha:</label>
										<input type="password" name="cad_senha" id="senha" class="form-control password" required="required"/>
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" class="btn btn-primary">Salvar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="modal" tabindex="-1" role="dialog" id="Entrar">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Came in BABY!!!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="home.php" method="POST">
						<div class="modal-body">
								<div class="row">
									<div class="form-group col-sm-12 col-xs-12">
										<label>Nominho please:</label>
										<input type="text" name="nome2" id="nome2" class="form-control" required="required"/>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label>Senha:</label>
										<input type="password" name="cad_senha2" id="senha2" class="form-control password" required="required"/>
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validaform.min.js"></script>
		<script src="js/teste.js"></script>
	</body>
</html>