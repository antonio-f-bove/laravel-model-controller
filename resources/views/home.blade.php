<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel-model-controller</title>
</head>
<body>
  
  <h1>laravel-model-controller</h1>
  <h2>Movie list:</h2>

  <ul>
    @foreach ($movies as $movie)
      <li>{{ $movie->original_title }}</li>
    @endforeach
  </ul>

</body>
</html>