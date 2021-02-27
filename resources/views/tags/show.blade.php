@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('tags.index') }}">BACK TO TAG</a>
                <div class="articles">
                    <h2>{{$tag->name}}</h2>
                    <div class="form-group">
                        <p>
                            <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}">
                                <i class="fas fa-pen fa-md fa-fw"></i>
                                EDIT
                            </a>
                        </p>
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
    </div>
    </main>
@endsection