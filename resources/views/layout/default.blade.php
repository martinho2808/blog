<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('styles')
</head>
<body>
	
    @include('layout.header')


        @yield('content')
    </div>
    @include('layout.footer')
    </div>
</body>
</html>