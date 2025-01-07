<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Movies List</h1>
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                        <small class="text-muted">Created: {{ $movie->created_at->format('Y-m-d') }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>