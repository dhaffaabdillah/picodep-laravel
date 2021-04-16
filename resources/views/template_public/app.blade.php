<!DOCTYPE html>
<html lang="en">
  @include('template_public.head')
<body>

    @include('template_public.header')
    @include('template_public.sidebar')
    @include('template_public.navbar')

    @yield('body')

  
    @include('template_public.footer')
  	@include('template_public.script') 
</body>
</html>