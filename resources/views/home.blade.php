@extends('templates.base')

@section('pageTitle', 'DC COMINCS - Home')

@section('pageMain')
    <main>
        <ul>
            @foreach ($comics as $comic)
            <li>
                <a href="{{ $comic['link']}}">
                  <div>
                    <img src= "{{ $comic['thumb'] }}">
                    <div>{{ $comic['series'] }}</div>
                  </div>
                </a>
              </li>
            @endforeach
        </ul>
    </main>

@endsection