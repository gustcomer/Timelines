@extends('layout')

@section('content')
    <div class="container">
    	<h1 class="title">Editar Timeline</h1>
        
        <form method="POST" action="/timelines/{{ $timeline->id }}"> 
        	{{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="nome" name="nome" value="{{ $timeline->nome }}">
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Atualizar timeline</button>
                </div>
            </div>
        </form>
    </div>
@endsection