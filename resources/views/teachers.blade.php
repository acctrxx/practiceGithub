<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @foreach ($teachers as $data)
    <h3>{{ $data->id . ' . ' . $data->address }}</h3>
  @endforeach
  
</body>
</html>