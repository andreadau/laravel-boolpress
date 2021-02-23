@extends('layout.app')
@section('main')
    <main>
        <div class="container">
        <a href="{{ route('posts.create') }}">NEW POST</a>
            @foreach($posts as $post)
                <div class="posts">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->description}}</p>
                    <div class="form-button">
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a> 
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                            <i class="fas fa-pen fa-md fa-fw"></i>
                            EDIT
                        </a> 
                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">
                            <i class="fas fa-trash fa-md fa-fw"></i>
                            DELETE
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
