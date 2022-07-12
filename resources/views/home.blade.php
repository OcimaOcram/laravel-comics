@extends('templates.base')

@section('pageTitle', 'DC COMINCS - Home')

@section('pageMain')
    <main>
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic['title']}}</li>
            @endforeach
        </ul>
    </main>

@endsection