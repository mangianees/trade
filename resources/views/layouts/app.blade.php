<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Federo" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

  .objmargin1{
    left: 0;
    
  }
   
#heading{
  
  font-family: 'Federo', sans-serif;
}


.navfont{
  
  font-family: 'Federo', sans-serif;
}

.backcolor{
  -webkit-clip-path: polygon(5% 0, 95% 0, 100% 6%, 100% 94%, 96% 100%, 5% 99%, 0 95%, 0 6%);
clip-path: polygon(5% 0, 95% 0, 100% 6%, 100% 94%, 96% 100%, 5% 99%, 0 95%, 0 6%);
background-color:#F9FFEE;
}

.hd1{

   color:#fff;

}




    </style>
</head>
<body>
  
    <div id="app">
        @include('inc.navbar')   
        <main class="py-4">
                 
          <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>
        </main>
    </div>
</body>
</html>
