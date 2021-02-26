@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('articles.update',  ['article' => $article->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1>Edit the article</h1>
            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="{{$article->title}}" required placeholder="Inserisci il titolo del article">
            </div>
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo del article">{{$article->description}}</textarea>
            </div>
            <!-- Category -->
            <div class="form-group">
                <label for="category">Category</label>
                <select class="" name="category_id">
                @if ($categories)
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endif
                </select>
            </div>      
            <!-- Tags -->
            <div class="form-group">
                <label for="tags">Tags</label>
                <select name="tags[]" id="tags" multiple>
                @if ($tags)
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" {{ $article->tags->contains($tag) ? 'selected' : '' }}>{{$tag->name}}</option>
                    @endforeach
                @endif
                </select>
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