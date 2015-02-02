<!DOCTYPE html>
<html>
 <head>
 <title>@yield('title')</title>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
 </head>

 <body>
   <div id="head-wrapper">

      <div id="headder-navigation-bar">
        <div id="headder-navigation-logo">
          <img src="{{{ $url = URL::asset('images/logos.jpg') }}}" alt="Logo Image"/>
        </div>
        <div id="headder-navigation-global">
        </div>
      </div>

    </div>

    <div id="body-wrapper">

      <div id="profile-navigation">
        <div class="profile-details">
          <img src="{{{ $url = URL::asset('images/snowboard.jpg') }}}" height="175" width="175" alt="profile picture"/>
          <p><b>Christopher Brewin</b></p>
        </div>
        <div id="profile-detail-navigation">
          <ul>
            <li><a href="">Posts</a></li>
            <li><a href="">Friends</a></li>
            <li><a href="">Photos</a></li>
          </ul>
        </div>
      </div>
 @yield('content')
 </body>
</html>