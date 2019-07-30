<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('/') }}bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css">
  <script type="text/javascript" src="{{ url('/') }}bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="{{ url('/') }}bootstrap-datepicker-master/js/locales/bootstrap-datepicker.ja.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <link href="{{ url('/') }}/dist/css/vendor/bootstrap.min.css" rel="stylesheet"><!-- Loading Bootstrap -->
  <link href="{{ url('/') }}/dist/css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->

  <!-- datepicker -->
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

  <!-- select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <!-- <link href="{{ url('/') }}/css/starter-template.css" rel="stylesheet">Bootstrap theme(Starter) -->

  <link rel="shortcut icon" href="/dist/favicon.ico">
  <title>@yield('title')</title>
</head>
<style>
  h1 {
    font-size: 16px;
  }

  .form_wrap {
    padding: 10px;
  }

  .errors {
    width: 300px;
    font-size: 12px;
    color: #e95353;
    border: 1px solid #e95353;
    background-color: #f2dede;
  }

  .complete {
    padding-left: 10px;
    width: 290px;
    font-size: 12px;
    color: #2a88bd;
    border: 1px solid #2a88bd;
    background-color: #a6e1ec;
  }
</style>

<body>

  <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  <span class="navbar-brand">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  
  </button>
  <div>
  <tr class="nav navbar-nav">
      <td class="active"><a href="https://news.yahoo.co.jp">リンク1</a></td>
      <td><a href="#">リンク2</a></td>
      <td><a href="#">リンク3</a></td>
</tr>
    <form class="navbar-form navbar-right" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
  </div>
   <a class="navbar-brand" href="{{ url('/') }}/flat_ui/starter">Flat UI DEMO</a>
  </div>
  /.nav-collapse 
  </div>
</nav> -->

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Flat UIのサイト</a>
    </div>
    <tr class="nav navbar-nav">
      <td class="active"><a href="#">リンク1</a></td>
      <td><a href="#">リンク2</a></td>
      <td><a href="#">リンク3</a></td>
    </tr>
    <form class="navbar-form navbar-right" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
    <!-- /.navbar-collapse -->
  </nav><!-- /navbar -->

  <div class="container">
    @yield('content')
  </div>

  <!-- <script src="{{ url('/') }}/dist/js/vendor/video.js"></script> -->
  <script src="{{ url('/') }}/dist/scripts/flat-ui.min.js"></script>

  <!-- <script src="{{ url('/') }}/assets/js/prettify.js"></script>
  <script src="{{ url('/') }}/assets/js/application.js"></script> -->

  <script>
    //   videojs.options.flash.swf = "{{ url('/') }}/dist/js/vendors/video-js.swf"
  </script>
</body>

</html>