<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('styles')
</head>
<body>
<div id="fh5co-wrapper">
	<div id="fh5co-page">
        <header id="fh5co-header-section" class="sticky-banner">
            
            @include('layouts.login')
            @include('layouts.header')
        </header>
        @yield('js')
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
</div>
</body>
</html>