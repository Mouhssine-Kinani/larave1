@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Film</h1>

    <form action="{{ route('films.update', $film) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $film->title }}" required>
        </div>

        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" class="form-control" value="{{ $film->year }}" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $film->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $film->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Film</button>
        <a href="{{ route('films.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection