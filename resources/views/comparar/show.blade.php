@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Comparação {{$timeline1->nome}} e {{$timeline2->nome}} </h1>

        <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Evento</th>
                <th>Timeline</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sorted_points as $ponto)
                <tr class="{@if ($ponto->timeline_id == $timeline1->id) table-primary @else table-light @endif}">
                    <td>{{ $ponto->data }}</td>
                    <td>{{ $ponto->descricao }}</td>
                    <td>{{ $ponto->timeline->nome }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection

