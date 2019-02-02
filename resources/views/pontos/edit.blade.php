@extends('layout')

@section('content')
    <div class="container">
    	<h1 class="title">Editar Ponto</h1>
        
        <form method="POST" action="/pontos/{{ $ponto->id }}"> 
        	{{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data" placeholder="Data" name="data" value="{{ $ponto->data }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" value="{{ $ponto->descricao }}">
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Atualizar Ponto</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <form method="POST" action="/pontos/{{ $ponto->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <div class="field">
                <div class="control">
                    <button type = "submit" class="button">Deletar Ponto</button>
                </div>
            </div>
        </form>
    </div>
@endsection