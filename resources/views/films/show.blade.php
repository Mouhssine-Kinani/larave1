@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>{{ $film->title }}</h1>
            <p><strong>Category:</strong> {{ $film->category->name }}</p>
            <p><strong>Year:</strong> {{ $film->year }}</p>
            <p><strong>Description:</strong> {{ $film->description }}</p>
            <a href="{{ route('films.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection