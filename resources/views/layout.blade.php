<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','Timelines')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
  		padding-top: 65px;
		}
	</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="/">Home</a>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Timelines
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="/pontos">Listar</a>
					<a class="dropdown-item" href="/pontos/create">Adicionar</a>
					<a class="dropdown-item" href="#">Editar</a>
					<a class="dropdown-item" href="#">Excluir</a>
				</div>
			</li>
			<li class="nav-item">
	     		<a class="nav-link" href="#">Comparar</a>
	    </li>
		</ul>
	</div>
</nav>

@yield('content')

</body>
</html>