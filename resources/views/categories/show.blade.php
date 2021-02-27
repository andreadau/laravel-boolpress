@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('categories.index') }}">BACK TO CATEGORY</a>
                <div class="articles">
                    <h2>{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                    <div class="form-group">
                        <p>
                            <a href="{{ route('categories.edit', $category->id) }}">
                                <i class="fas fa-pen fa-md fa-fw"></i>
                                EDIT
                            </a>
                        </p>
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
    </div>
    </main>
@endsection