<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{asset('js/app.js')}}" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
 
</head>

<body>
    @include('layouts.flash-message')
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
            @yield('content')
            </div>
        </div>
    </div>
</body> 
</html>