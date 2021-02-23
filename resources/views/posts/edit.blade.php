@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('posts.update',  ['post' => $post->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1>Create a new Post</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="{{$post->title}}" required placeholder="Inserisci il titolo del post">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo del post">{{$post->description}}</textarea>
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