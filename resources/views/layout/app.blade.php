<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inzonia</title>

	<!-- Latest compiled and minified CSS --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="{{ asset('/css/CSS.css') }}" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>

<body style="overflow-x: hidden">

	<div id="parallax">
		<nav class="navbar navbar-default navbar-fixed-top navbar-semi-transparent navbar-highlight-green">
			<div class="contairner-fluid">
				<div class="navbar-header">
					<a id="letraNavbar" class="navbar-brand" href="/home#primeiroQuadro">Inzônia</a>
				</div>

				<div class="col-xs-9">
    				<div class="collapse navbar-collapse" id="navPages">
    					<ul class="nav navbar-nav">
    						<li>
    							<a href="#maisSobreNós">
    								<span class="glyphicon glyphicon-info-sign"></span> Mais sobre nós
    							</a>
    						</li>

    						<li>
    							<a href="#galeria">
    								<span class="glyphicon glyphicon-film"></span> Galeria
    							</a>
    						</li>

    					</ul>
    				</div>
    			</div>
    			<div class="col">
    				<div class="collapse navbar-collapse" id="navPages">
    					<ul class="nav navbar-nav">
    						<li>
    							<a href="https://www.facebook.com/">
    								<img src="facebook.png">
    							</a>
    						</li>

    						<li>
    							<a href="#">
    								<img src="twitter.png">
    							</a>
    						</li>

    						<li>
    							<a href="#">
    								<img src="whatsapp.png">
    							</a>
    						</li>
    					</ul>
    				</div>
    			</div>
			</div>
		</nav>

		@yield('contato')
        @yield('locais')
        @yield('home')

        @include('layout.footer')


	</div>
</body>
</html>