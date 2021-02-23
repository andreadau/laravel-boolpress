@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            @method('POST')
            <h1>Create a new Article</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="" required placeholder="Inserisci il titolo dell'Articolo">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo dell'articolo"></textarea>
            </div>
            <button type="submit" class="btn-lg">ADD</button>
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
