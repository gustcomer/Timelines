@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">{{ $timeline->nome }}</h1>

        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>Data</th>
            <th>Evento</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pontos as $ponto)
                <tr>
                    <td>{{ $ponto->data }}</td>
                    <td>{{ $ponto->descricao }}</td>

                    <td><a class="btn btn-primary btn-sm" href="/pontos/{{ $ponto->id }}/edit" role="button">Editar</a></td>

                    <td>
                        <form method="POST" action="/pontos/{{ $ponto->id }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary btn-sm" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

<div class="container">
    <form method="POST" action="/pontos">
        {{ csrf_field() }}
        <input type="hidden" name="timeline_id" value={{ $timeline->id }}>
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" class="form-control" id="data" placeholder="Data" name="data">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
@endsection