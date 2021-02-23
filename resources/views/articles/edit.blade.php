@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('articles.update',  ['article' => $article->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1>Create a new article</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="{{$article->title}}" required placeholder="Inserisci il titolo del article">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo del article">{{$article->description}}</textarea>
            </div>
            <button type="submit" class="btn-lg">EDIT</button>
            @if ($errors->any())
                <div class="alert">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                </div>
            @endif
        </form>
    </main>
@endsection