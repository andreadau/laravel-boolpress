@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('posts.index') }}">BACK TO POST</a>
                <div class="posts">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->description}}</p>
                    <div class="form-group">
                        <p>
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                                <i class="fas fa-pen fa-md fa-fw"></i>
                                EDIT
                            </a>
                        </p>
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
    </div>
    </main>
@endsection