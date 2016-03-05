<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-64399123-2', 'auto');
      ga('send', 'pageview');
    </script>

    <title>CRUDdy.io</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://rawgit.com/Askedio/jQuery-Cruddy/master/src/css/jquery-cruddy.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    CRUDdy.io
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a target="_new" href="https://github.com/Askedio"><em class="fa fa-github"></em></a></li>
                    <li><a target="_new" href="https://asked.io">Made By Asked.io</a></li>
                    <li><a target="_new" href="https://github.com/Askedio/jQuery-Cruddy">jQuery-CRUDdy</a></li>
                    <li><a target="_new" href="https://github.com/Askedio/Laravel5-API-Controller">laravel-CRUDdy</a></li>
                    <li><a target="_new" href="https://github.com/Askedio/Laravel-5-CRUD-Example"><em class="fa fa-code-fork"></em></a></li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrender/0.9.73/jsrender.min.js"></script>
    <script src="https://rawgit.com/Askedio/jQuery-Cruddy/master/src/js/jquery-cruddy.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    
    <script>
    </script>

    <script>
      $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
      $('.container-user').cruddy();
    </script>
</body>
</html>
