<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>@yield('title')</title>

      @stack('prepend-style')
      @include('includes.style')
      @stack('addon-style')
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
      <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-angle-up"></i></a>

      @include('includes.navbar')

      @yield('content')

      @include('includes.footer')

      @stack('prepend-script')
      @include('includes.script')
      @stack('addon-sript')
  </body>

</html>