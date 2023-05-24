<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    @yield('style')
    <script src=""></script>
    <title>@yield('title')</title>
  
</head>

<body>
    <header>
		<nav>
			<ul>
                
				<li><a class="a" href="{{ route('home') }}"><img src="{{ asset('web logo.png') }}" style="width:100px" alt=""></a></li>
				<li><a class="link" href="{{ route('Aboutus') }}">About Us</a></li>
				<li><a class="link" href="#">Contact Us</a></li>
			</ul>
			<div class="search">
                @yield('add')
			</div>
			  
		</nav>
	</header>


   <section style="background-color: #1f1e2e"> @yield('content')</section>  
</body>
</html>
