<!DOCTYPE html>
<html>
    <head>
        <title>Teste Programador Php Jr - UpLexis</title>
		<link href="{{asset('css/cadastro.css')}}" rel="stylesheet" type="text/css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta name="csrf-token" content="{{csrf_token()}}">
	</head>
    <body>
        <div class="container">
			<div class="card card-container">
				<p id="profile-name" class="profile-name-card">Cadastro de Usuário</p>
				<form class="form-signin" method="post" action="{{$app['url']->to('/usuarios/cadastra')}}">
					<span id="reauth-email" class="reauth-email"></span>
					<input type="text" id="inputNome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mail" required autofocus>
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">cadastrar</button>
				</form>
				<a href="{{$app['url']->to('/')}}" class="forgot-password" title="voltar a tela de login">voltar a tela de login</a>
			</div>
        </div>
    </body>
	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
</html>