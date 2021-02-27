@extends('layout.app')
@section('main')
    <main>
        <div class="container">
        <a href="{{ route('categories.create') }}">NEW CATEGORY</a>
            @foreach($categories as $category)
                <div class="articles">
                    <h2>{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                    <div class="form-button">
                        <a href="{{ route('categories.show', $category->id)}}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a> 
                        <a href="{{ route('categories.edit', $category->id)}}">
                            <i class="fas fa-pen fa-md fa-fw"></i>
                            EDIT
                        </a> 
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
