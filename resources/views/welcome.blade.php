<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<p>
<div class="container">
    <div class="card">
        <div class="card-header">
            Articles <small>({{ $articles->count() }})</small>
        </div>
        <div class="card-body">
            <form action="{{ url('search') }}" method="get">
                <div class="form-group">
                    <input
                        type="text"
                        name="q"
                        class="form-control"
                        placeholder="Search..."
                        value="{{ request('q') }}"
                    />
                </div>
            </form>
            @forelse ($articles as $article)
                <article class="mb-3">
                    <h2>{{ $article->title }}</h2>
                    <p class="m-0">{{ $article->body }}</p>
                    <div>
                        @foreach ($article->tags as $tag)
                            <span>{{ $tag}}</span>
                        @endforeach
                    </div>
                </article>
            @empty
                <p>No articles found</p>
            @endforelse
        </div>
    </div>
</div>
</body>
</html>
