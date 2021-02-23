@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($articles as $article)
                <div class="articles">
                    <h2>{{$article->title}}</h2>
                    <p>{{$article->description}}</p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
