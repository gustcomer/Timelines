@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Timelines</h1>
    
        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>Nome</th>
            <th></th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($timelines as $timeline)
                <tr>
                    <td>{{ $timeline->nome }}</td>
                    <td><a class="btn btn-primary btn-sm" href="/timelines/{{ $timeline->id }}" role="button">Mostrar</a></td>
                    <td><a class="btn btn-primary btn-sm" href="/timelines/{{ $timeline->id }}/edit" role="button">Editar</a></td>

                    <td>
                        <form method="POST" action="/timelines/{{ $timeline->id }}">
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

        <form method="POST" action="/timelines">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection