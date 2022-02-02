@extends('layouts.foundation')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    <div class="container">
        {{-- @dump($comics) --}}

        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
                <p>{{$comic["series"]}}</p>
            </div>
            @endforeach
        </div>

    </div>
@endsection
