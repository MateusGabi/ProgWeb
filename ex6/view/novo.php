
<!DOCTYPE html>
<html lang="en">

<head>
<title>Portal Cambuci - Criar conta</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Compiled and minified CSS -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link rel="stylesheet" href="assets/css/theme-materialize.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">


<script type="text/javascript">
	/* Primeiro ano da Portal Cambuci */
	var s_year = 2016;
	/* Ano atual */
	var a_year = new Date().getYear() + 1900;
	var years = (s_year == a_year) ? s_year : s_year + " &mdash; " + a_year;
</script>

</head>

<body>

	<div class="navbar-fixed">
		<!-- navbar -->
		<nav>
			<div class="nav-wrapper">
				<a class="brand-logo center" href="#"><i class="material-icons">toys</i>
					Exercicio 6</a>
			</div>
		</nav>
	</div>

	<main>
	<div class="container">
		<h3 class="center">Criar Conta</h3>


		<div class="row">
			<form action="#" method="POST" class="col s6 offset-s3">
				<div class="row">
					<div class="input-field col s6">
						<label for="first_name">Primeiro Nome</label> <input
							placeholder="João" id="first_name" type="text" class="validate"
							required>
					</div>
					<div class="input-field col s6">
						<label for="last_name">Último Nome</label> <input
							placeholder="da Silva" id="last_name" type="text"
							class="validate" required>
					</div>
				</div>


				<div class="row">
					<div class="input-field col s6">
						<label>E-mail</label> <input type="email" name="email"
							placeholder="joao.dasilva@example.com" required>
					</div>
					<div class="input-field col s6">
						<label>Data de Nascimento</label> <input type="text" name="born"
							placeholder="31/12/1999" required>
					</div>

				</div>

				<div class="row">
					<div class="input-field col s6">
						<label>Senha</label> <input placeholder="n@#we234" type="password"
							name="password" required>
					</div>
					<div class="input-field col s6">
						<label>Confirmar Senha</label> <input type="password"
							placeholder="n@#we234" name="password-confirm" required>
					</div>
				</div>

				<div class="row center">

					<div class="g-recaptcha"
						data-sitekey="6LfcGA4UAAAAAO6IYsRU_W4_MzhWrOto6qWK0QkK"></div>
				</div>

				<div class="row">
					<input type="checkbox" class="filled-in" id="filled-in-box"
						checked="checked" /> <label for="filled-in-box">Declaro
						que aceito os Termos de Uso e Termos de Privacidade</label>
				</div>

				<div class="row">
					<button type="submit" class="waves-effect waves-light btn">Cadastrar</button>
				</div>

			</form>

		</div>

	</div>

	</main>



	<footer class="teal darken-4">
		<div class="footer-copyright grey-text text-lighten-4">
			<div class="container">
				&copy;
				<script>
					document.write(years);
				</script>
				Portal Cambuci &mdash; Pense. Crie. Compartilhe. <a href="#"
					class="right grey-text text-lighten-4">Termos de Uso</a> <a
					href="#" class="right grey-text text-lighten-4">Privacidade</a> <a
					href="#" class="right grey-text text-lighten-4">Sobre</a> <a
					href="#" class="right grey-text text-lighten-4">Contato</a> <a
					href="#" class="right grey-text text-lighten-4">Ajuda</a>
			</div>
		</div>
	</footer>


	<!-- Scripts -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

	<script src='https://www.google.com/recaptcha/api.js'></script>

</body>

</html>


<!-- / Index Page with bootstrap framework Itens -->