@php use Illuminate\Support\Str; @endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Films List</h1>

    <div class="mb-3">
        <form action="{{ route('films.index') }}" method="GET">
            <select name="category_id" class="form-control d-inline-block w-auto" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ isset($category_id) && $category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="row">
        @foreach($films as $film)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p class="card-text">{{ Str::limit($film->description, 100) }}</p>
                        <div class="btn-group">
                            <a href="{{ route('films.show', $film) }}" class="btn btn-info">Details</a>
                            <a href="{{ route('films.edit', $film) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection