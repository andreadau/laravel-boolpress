@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('tags.store') }}" method="post">
            @csrf
            <h1>Create a new Article</h1>
            <!-- Title -->
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" value="" required placeholder="Inserisci il titolo dell'Articolo">
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
