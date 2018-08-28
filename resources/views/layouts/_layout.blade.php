<!DOCTYPE html>
<html lang="en">
<head> 
    <!-- <title>Moderna - Bootstrap 3 flat corporate template</title> -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
     
    @include('layouts.styles')
 
</head>
<body>

    <!-- @include('layouts.header') -->
     
    <div id="wrapper">
        @include('layouts.header')
 
        @yield('content')
 
        @include('layouts.footer')
    </div>
     
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    @include('layouts.scripts')
     
</body>
</html>