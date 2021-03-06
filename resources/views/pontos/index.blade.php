﻿@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Timeline</h1>
    
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
@endsection