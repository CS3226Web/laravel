<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CS3233 Ranklist 2017</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
  <link rel="stylesheet" href="css/custom_style.css">
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	    <!--Dropdown button -->
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">CS3233 Ranklist 2017</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('help') }}">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Admin Login</a></li>
        <li class="dropdown"></li>
      </ul>
    </div>
  </div>
</nav>
@yield('main')
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="container text-center">
    <p>© 2017 Someone</p>
  </div>
</footer>

</html>
