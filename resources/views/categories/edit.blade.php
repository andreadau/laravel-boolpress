@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('categories.update',  ['category' => $category->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1>Edit the category</h1>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" value="{{$category->name}}" required placeholder="Inserisci il titolo della category">
            </div>
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo della category">{{$category->description}}</textarea>
            </div>
            <!-- Submit -->
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