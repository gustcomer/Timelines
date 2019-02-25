@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Comparar Timelines</h1>
        <form method="POST" action="/comparar">
            {{ csrf_field() }}
            <table class="table">
            <thead>
                <tr>
                <th></th>
                <th>Nome</th>
                </tr>
            </thead>
            <!-- https://stackoverflow.com/questions/4997252/get-post-from-multiple-checkboxes -->
            <!-- https://laracasts.com/discuss/channels/laravel/multi-select-check-box-in-laravel-tables -->
            <tbody>
                @foreach ($timelines as $timeline)
                    <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <!-- <input type="checkbox" class="custom-control-input" id="{{ $timeline->id }}" name="timeline[]" value="val{{ $timeline->id }}"> -->
                            <input type="checkbox" class="custom-control-input" id="{{ $timeline->id }}" name="timeline[]" value="{{ $timeline->id }}">
                            <label class="custom-control-label" for="{{ $timeline->id }}"></label>
                          </div>
                        </td>
                        <td>{{ $timeline->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Comparar</button>
        </form>
    </div>
@endsection

