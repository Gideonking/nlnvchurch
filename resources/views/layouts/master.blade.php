
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head')
  </head>

  <body>
    @include('layouts.nav')

    <div class="nlnv__container">
      @yield('content')
    </div>

    <div class="nlnv__container">
      @include('layouts.footer')
    </div>
  </body>
</html>
