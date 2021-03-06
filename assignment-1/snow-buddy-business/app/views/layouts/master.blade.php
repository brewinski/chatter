<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="{{ URL::asset('images/chatter-red.png') }}" alt="on the mountain logo" height="50"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigationbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Login<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Sign Up<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url("post")}}">Home</a></li>
            <li ><a href="#">Friends<span class="sr-only">(current)</span></a></li>
            <li><span class="nav-divider"></span></li>
          </ul>

        </div><!-- /.navbar-collapse -->

      </div><!-- /.container-fluid -->
    </nav>
    <div calss="container-fluid">
      <!---------------------------------------- Jumbotron ---------------------------------->
      <div class="jumbotron">
        <div class="container">
          @yield('jumbotron')
        </div>
      </div>
    </div>
    <!-------------------------------------------- End Jumbotron ----------------------->
    @yield('content')
  </body>
</html>