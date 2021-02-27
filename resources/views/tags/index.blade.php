@extends('layout.app')
@section('main')
    <main>
        <div class="container">
        <a href="{{ route('tags.create') }}">NEW tag</a>
            @foreach($tags as $tag)
                <div class="articles">
                    <h2>{{$tag->name}}</h2>
                    <div class="form-button">
                        <a href="{{ route('tags.show', ['tag' => $tag->id]) }}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a> 
                        <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}">
                            <i class="fas fa-pen fa-md fa-fw"></i>
                            EDIT
                        </a> 
                        <form action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="post">
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
