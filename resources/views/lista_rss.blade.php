<!DOCTYPE html>
<html>
    <head>
        <title>Teste Programador Php Jr - UpLexis</title>
		<link href="{{asset('css/lista_rss.css')}}" rel="stylesheet" type="text/css">
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<meta name="csrf-token" content="{{csrf_token()}}">
	</head>
    <body>
        <nav class="navbar navbar-default " role="navigation">
			<div class="container"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a target="_blank" href="javascript:void(0);" class="navbar-brand">País - Google Notícias</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-user"></span> 
								<strong>{{ Auth::user()->nome }}</strong>
								<span class="glyphicon glyphicon-chevron-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<div class="navbar-login">
										<div class="row">
											<div class="col-lg-8">
												<p class="text-left"><strong>{{ Auth::user()->nome }}</strong></p>
												<p class="text-left small">{{ Auth::user()->email }}</p>
											</div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="navbar-login navbar-login-session">
										<div class="row">
											<div class="col-lg-12">
												<p>
													<a href="{{$app['url']->to('logout')}}" class="btn btn-danger btn-block">Sair</a>
												</p>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>RSS de Notícias do Google</h2>
					<table class="table-vertical">
						<thead>
							<tr>
								<th>Titulo da Notícia</th>
								<th>Categoria</th>
								<th>Data de Publicação</th>
							</tr>
						</thead>
						<tbody>
							@foreach($noticias->item as $rss)
								<tr>
									<td data-th="{{ $rss->title }}"><a href="{{ $rss->link }}" target="_blank" title="{{ $rss->title }}">{{ $rss->title }}</a></td>
									<td data-th="{{ $rss->category }}">{{ $rss->category }}</td>
									<td data-th="{{ $rss->pubDate }}">{{ $rss->pubDate }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
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