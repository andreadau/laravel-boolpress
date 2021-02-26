@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <h1>Create a new Article</h1>
            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="" required placeholder="Inserisci il titolo dell'Articolo">
            </div>
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo dell'articolo"></textarea>
            </div>
            <!-- Category -->
            <div class="form-group">
                <label for="categories">Category</label>
                <select class="" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>             
            <!-- Tags -->
            <div class="form-group">
                <label for="tags">Tags</label>
                <select name="tags[]" id="tags" multiple>
                @if ($tags)
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                @endif
                </select>
            </div>
            <!-- Submit -->
            <button type="submit" class="btn-lg">ADD</button>
            @if ($errors->any())
                <div class="alert">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                </div>
            @endif
        </form>
        </div>
    </main>
@endsection
