<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
  <body>
    @include('partials._nav')

      <div class="container">
        @yield('content')

        @include('_footer')
      </div> <!--  //end of conatiner -->
    @include('scripts')
  </body>
</html>