<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1006/1006771.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  @include('partials.navbar')
  <div class="container py-5">
    @yield('container')
  </div>

  <footer class="text-center text-dark">
    <p>Muhammad Haris - 2010631170098</p>
  </footer>
  
</body>
</html>