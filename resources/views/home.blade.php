@extends('layout.app')
@section('home')

<div class="row" id="rowInicialVazio"></div>


<div class="contairner-fluid" id="primeiroQuadro">

	<div class="row" id="rowPrimeiraPagina">
		<div class="col-xs-4">
			<img class="img-responsive" src="modelo2.png" id="fotoDaModelo1" ">
		</div>

		<div class="col-xs-4">
			<p id="letraSubTitulo"><strong>PRIMA<br>VERA<br>2017</strong></p>
		</div>


		<div class="col-xs-4" id="fotoDaModelo" class="img-responsive">
			<img src="modelo.png" id="fotoDaModelo2"> 
		</div>
	</div>
</div>

<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>


<div class="contairner" id="maisSobreNós">

	<div class="row" id="rowInicialVazio"></div>
	<div class="row" id="rowInicialVazio"></div>


	<div class="col-xs-12">
		<p id="letraSeções"><strong>Mais sobre nós</strong></p>
	</div>

	<div class="row" id="rowInicialVazio"></div>
	<div class="row" id="rowInicialVazio"></div>
	<div class="row" id="rowInicialVazio"></div>


	<div class="col-xs-6 col-xs-offset-3">
		<p id="normal">Fomos fundados em 1998 e estou escrevendo bastante coisa aleatória para encher esse quadro com muitas informações inúteis, já que nós nem existimos de verdade, mas para o site parecer um site de uma loja que existe esse campo deve conter uma quantidade rasoavel de caracteres sendo assim termino essa frase com vestido para que tenha pelo menos alguma palavra sobre o tema do site, vestido. Alem disso vou escrever mais um paragrafo porque um só é muito pouco, então lá vai mais um parágrafo. Se você ta lendo até aqui realmente ta interessado em saber oque eu tenho para contar quando estou altistando, então vou falar... Ou talvez não </p>
	</div>

</div>


<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>



<div class="col-xs-12" id="galeria">

	<div class="row" id="rowInicialVazio"></div>
	<div class="row" id="rowInicialVazio"></div>

	<p id="letraSeções"><strong>Galeria</strong></p>
</div>

<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
  			<img src="roupa1.png" id="roupaGaleria">
  			<div class="carousel-caption">
  			</div>
		</div>
		<div class="item">
  			<img src="roupa2.png" id="roupaGaleria">
  			<div class="carousel-caption">
  			</div>
		</div>
		<!--<div class="item">
  			<img src="roupa3.png" id="roupaGaleria">
  			<div class="carousel-caption">
  			</div>
		</div>-->
		<div class="item">
  			<img src="roupa4.png" id="roupaGaleria">
  			<div class="carousel-caption">
  			</div>
		</div>
	</div>

<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</div>		

@endsection