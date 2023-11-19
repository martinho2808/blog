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
            @include('layout.login')
            @include('layout.header')
        </header>

        @yield('content')
    </div>
    <footer>
        @include('layout.footer')
    </footer>
    @yield('js')
</div>
</body>
</html>