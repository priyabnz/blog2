<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
  <body>
    @include('partials._nav')
    @include('partials._message')

      <div class="container">
      @include('partials._message')
        @yield('content')

        @include('partials._footer')
      </div> 

      <!--  //end of conatiner -->
      @include('partials._javascript')
    @yield('scripts')
  </body>
</html>