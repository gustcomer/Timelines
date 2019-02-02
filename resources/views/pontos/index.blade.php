@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Timeline</h1>
    
        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>Data</th>
            <th>Evento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pontos as $ponto)
                <tr>
                    <td>{{ $ponto->data }}</td>
                    <td>{{ $ponto->descricao }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection