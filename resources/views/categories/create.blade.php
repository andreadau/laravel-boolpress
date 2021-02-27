@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <h1>Create a new Category</h1>
            <!-- Title -->
            <div class="form-group">
                <label for="Name">Name</label>
                <input name="name" type="text" value="" required placeholder="Inserisci il titolo dell'Articolo">
            </div>
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required rows="3" placeholder="Inserisci il testo dell'articolo"></textarea>
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
