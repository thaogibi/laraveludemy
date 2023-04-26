<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LaravelUdemy-@yield('title')</title>
</head>
<body>
  <div>
    @if(session()->has('status'))
      <div style="background-color:green">
        {{ session()->get('status') }}
      </div>
    @endif

    @yield('content')
    
  </div>
</body>
</html>