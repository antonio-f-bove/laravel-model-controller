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
          <div class="card mb-3">
            <h2 class="card-header text-center d-flex justify-content-center align-items-center"
            style="height: 3em;"
            >
              {{ $movie->title }}
            </h2>
            <div class="card-body">
              <h5 class="card-title">
                Original Title: {{ $movie->original_title }}
              </h5>
              <div class="card-text">
                <dl>
                  <dd>
                    <span>Release date</span>: {{ $movie->date }}
                  </dd>
                  <dd>
                    <span>Nationality</span>: {{ $movie->nationality }}
                  </dd>
                  <dd>
                    @php
                      $rating = ceil($movie->vote / 2);
                    @endphp
                    <span>Rating:</span>
                    @for ($i = 0; $i < $rating; $i++)
                    <i class="bi bi-star-fill"></i>
                    @endfor
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </section>
  </div>

</body>
</html>