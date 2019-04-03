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

    <!-- Javascript-->

    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.32.1/dist/algoliasearchLite.js" integrity="sha256-pMaJf0I78weeXGkRMBDO6jSulxC/q3sb0aPdtV2N8n0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@3.2.0" integrity="sha256-/8usMtTwZ01jujD7KAZctG0UMk2S2NDNirGFVBbBZCM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>

    <script src="{{ asset('js/algolia.js') }}"></script>

    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.1/themes/reset-min.css" integrity="sha256-JQ2nnTmybhOWSjfV3sa8mG0ZVhTCcORER4cyXc5HL10=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.1/themes/algolia-min.css" integrity="sha256-nkldBwBn2NQqRL1mod7BqHsJ6cEOn6u/ln6F/lI4CFo=" crossorigin="anonymous">


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
