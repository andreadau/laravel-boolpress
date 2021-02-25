@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('articles.index') }}">BACK TO ARTICLE</a>
                <div class="articles">
                    <h2>{{$article->title}}</h2>
                    <p>{{$article->description}}</p>
                    <p>Category : {{$article->category ? $article->category->name : 'N/A' }}</p>
                    <p>Tags : {{$article->tags ? $article->tags->name : 'N/A' }}</p>
                    <div class="form-group">
                        <p>
                            <a href="{{ route('articles.edit', ['article' => $article->id]) }}">
                                <i class="fas fa-pen fa-md fa-fw"></i>
                                EDIT
                            </a>
                        </p>
                        <form action="{{ route('articles.destroy', ['article' => $article->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">
                            <i class="fas fa-trash fa-md fa-fw"></i>
                            DELETE
                            </button>
                        </form>
                    </div>
                </div>
    </div>
    </main>
@endsection