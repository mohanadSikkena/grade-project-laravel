<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
  <div>
      <section>
        @yield('add')
        <h1>@yield('page_title')</h1>
            @yield('content')
    </section>
  </div>
</body>
</html>
