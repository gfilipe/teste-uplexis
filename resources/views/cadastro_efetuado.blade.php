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
	</head>
    <body>
        <div class="container">
			<div class="card card-container">
				<p id="profile-name" class="profile-name-card">{{$msg}}</p>
				<br/>
				<a href="{{$app['url']->to('/usuarios')}}" class="btn btn-primary btn-xs" title="quero me cadastrar">quero me cadastrar</a>
				<br/><br/>
				<a href="{{$app['url']->to('/')}}" class="btn btn-primary btn-xs" title="voltar a área de login">voltar a área de login</a>
			</div>
        </div>
    </body>
</html>