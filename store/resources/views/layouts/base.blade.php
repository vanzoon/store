<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>
      @yield('title')
    </title>
</head>

<body>
  @include('layouts/header')
<section class="section">
<div class="container">
  @yield('content')
</div>
</section>
  @include('layouts/footer')
</body>
</html>
