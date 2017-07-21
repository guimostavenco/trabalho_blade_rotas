@extends('layout.app')
@section('contato')

<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>
<div class="row" id="rowInicialVazio"></div>

<div class="col-xs-4 col-xs-offset-4">
	@if(!empty($message))
		<div class="alert alert-success" role="alert">Contato registrado</div>
	@endif

	<form method="POST" action="{{action('RotaController@metodoPut', ['variavel' => 'variavel do metodo put'])}}">
		{{ method_field('PUT')}}
		{{csrf_field()}}

		<div class="form-group">
			<input style="margin-top: 4vh" id="name" type="text" class="form-control" placeholder="Name" name="nome">
			<input style="margin-top: 4vh" id="email" type="email" class="form-control" placeholder="E-mail" name="email">
			<button type="submit" style="margin-left: 13vw; margin-top: 4vh">Enviar</button>
		</div>
	</form>
</div>

@endsection