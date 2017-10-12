
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>New Life New Vision Church</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/vendor/slick.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- FontWesome -->
    <script src="https://use.fontawesome.com/798a0438d6.js"></script>
  </head>

  <body>
    @include('layouts.nav')

    <div class="nlnv-container">
      @yield('content')
    </div>

    @include('layouts.footer')
  </body>
</html>
