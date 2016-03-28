
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">

        <title>
            @yield('title','p3')
        </title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="/css/ie10.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/css/master.css" rel="stylesheet">

        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')

    </head>

  <body>

    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" @yield('home')><a href="/">Home</a></li>
                    <li role="presentation" @yield('text')><a href="/text">Text</a></li>
                    <li role="presentation" @yield('user')><a href="/user">User</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Developer's Best Friend</h3>
        </div>

        @yield('content')

      <footer class="footer">
        <p>CSCI E-15 Dynamic Web Applications - Project Three</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
