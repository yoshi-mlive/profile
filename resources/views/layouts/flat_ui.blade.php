<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{ url('/') }}/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Loading Bootstrap -->
  <link href="{{ url('/') }}/dist/css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->
  <link href="{{ url('/') }}/css/starter-template.css" rel="stylesheet"><!--Bootstrap theme(Starter)-->
 
  <link rel="shortcut icon" href="/dist/img/favicon.ico">
    <title>@yield('title')</title>
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <!-- <a class="navbar-brand" href="{{ url('/') }}/flat_ui/starter">Flat UI DEMO</a> -->
  </div>
  <div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
  <?php if(preg_match("/starter/",$_SERVER["REQUEST_URI"])){ echo "<li class='active'>"; }else{ echo "<li>"; } ?><a href="{{ url('/') }}/flat_ui/starter">Home</a></li>
  <?php if(preg_match("/components/",$_SERVER["REQUEST_URI"])){ echo "<li class='active'>"; }else{ echo "<li>"; } ?><a href="{{ url('/') }}/flat_ui/components">Components</a></li>
  <?php if(preg_match("/typo/",$_SERVER["REQUEST_URI"])){ echo "<li class='active'>"; }else{ echo "<li>"; } ?><a href="{{ url('/') }}/flat_ui/typo">Typography</a></li>
  <?php if(preg_match("/forms/",$_SERVER["REQUEST_URI"])){ echo "<li class='active'>"; }else{ echo "<li>"; } ?><a href="{{ url('/') }}/flat_ui/forms">forms</a></li>
  </ul>
  </div><!--/.nav-collapse -->
  </div>
</nav>

  <div class="container">
  @yield('content')
</div>

<script src="{{ url('/') }}/dist/js/vendor/video.js"></script>
<script src="{{ url('/') }}/dist/js/flat-ui.min.js"></script>
 
<script src="{{ url('/') }}/assets/js/prettify.js"></script>
<script src="{{ url('/') }}/assets/js/application.js"></script>
 
<script>
  videojs.options.flash.swf = "{{ url('/') }}/dist/js/vendors/video-js.swf"
</script>
  </body>
</html>