<!doctype html>
<html lang="en">
<head>
@include('base.header')
@include('base.menu')
@include('base.sidebar')
@include('base.footer')
@include('base.footer_script')
@yield('header')
</head>
<body>

<div class="wrapper">
@yield('sidebar')

    <div class="main-panel">
	
     @yield('menu')

      @yield('content')
       
       @yield('footer')

    </div>
</div>


</body>
</html>
@yield('footer_script')