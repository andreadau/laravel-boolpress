@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('tags.update',  ['tag' => $tag->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1>Edit the Tag</h1>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" value="{{$tag->name}}" required placeholder="Inserisci il titolo del tag">
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