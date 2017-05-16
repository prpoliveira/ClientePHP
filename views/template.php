<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="static/img/favicon.ico" />

<title>Sistema de Calculo de Frete - Pós Web UNISAL - Turma 2016</title>

<!-- Bootstrap core CSS -->
<link href="/static/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="/static/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/static/css/jumbotron.css" rel="stylesheet">

<script src="/static/js/ie-emulation-modes-warning.js"></script>

<style type="text/css">
	.texto {
		font-size: 16px !important;
	}
</style>

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Cálculo de Frete</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<form class="navbar-form navbar-right"
					action="../home" method="post">
					<button type="submit" class="btn btn-success">Logout</button>
				</form>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h2>Sistema de Cadastro de Cidades e Cálculo de Fretes</h2>
			<p class="texto">O sistema permite entrada de uma nova cidade e cálculo de extensão e frete de acordo com regra interna.</p>
		</div>
	</div>
	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			
		
<?php $this->loadViewInTemplate($viewName, $viewData); ?>



</div>

<hr>

<footer>
	<p>&copy; 2017 Unisal - Pós graduação Desenvolvimento Web e Mobile 2016</p>
</footer>
</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	window.jQuery
			|| document
					.write('<script src="<c:url value="/static/js/jquery.min.js"/>"><\/script>')
</script>
<script src="<c:url value="/static/js/bootstrap.min.js"/>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<c:url value="/static/js/ie10-viewport-bug-workaround.js"/>"></script>
</body>
</html>