@extends('layout')

@section('content')

<div class="container">
	<h2>Criar Ponto</h2>

	<form method="POST" action="/pontos">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="data">Data:</label>
		    <input type="date" class="form-control" id="data" placeholder="Data" name="data">
		</div>
		<div class="form-group">
			<label for="pwd">Descrição:</label>
			<input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
		</div>
		<button type="submit" class="btn btn-primary">Adicionar</button>
	</form>
</div>

@endsection