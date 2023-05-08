<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('layoutStyle.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    @yield('style')
    <script src=""></script>
    <title>@yield('title')</title>
  
</head>

<body>


  <main>
      @yield('add')
      <h1>@yield('page_title')</h1>
          @yield('content')
  </main>


  
</body>
</html>
