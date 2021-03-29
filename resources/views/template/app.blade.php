<!DOCTYPE html>
<html lang="en">
  @include('template.head')
<body>

    @include('template.header')
    @include('template.sidebar')

    @yield('body')

  

  	@include('template.script') 
</body>
</html>