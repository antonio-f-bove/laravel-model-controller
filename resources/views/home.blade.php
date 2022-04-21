<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel-model-controller</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
  <h1>laravel-model-controller</h1>
  <h2>Movie list:</h2>

  <div class="container">
    <section class="row">
      @foreach ($movies as $index => $movie)
        <div class="col-4">
          <div class="card">
            <h2 class="card-header">
              {{ $movie->title }}
            </h2>
            <div class="card-body">
              <div class="card-title">
                Original Title: {{ $movie->original_title }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </section>
  </div>

</body>
</html>