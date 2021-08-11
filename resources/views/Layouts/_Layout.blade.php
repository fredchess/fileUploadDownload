<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/')}}/libs/bootstrap/css/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('Home Page') }}">GetFiles</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ route('Home Page') }}">Home</a>
              <a class="nav-link" href="{{ route('files.list') }}">All Files</a>
              <a class="nav-link" href="{{ route('files.add') }}">Add a File</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Downloads</a>
            </div>
          </div>
        </div>
      </nav>
      @yield('content')
</body>
    <script src="{{url('/')}}/libs/js/jquery/jquery.js"></script>
    <script src="{{url('/')}}/libs/bootstrap/js/bootstrap.js"></script>
</html>