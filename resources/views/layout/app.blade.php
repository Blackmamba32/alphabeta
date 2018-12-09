<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Unlock" rel="stylesheet">

        <title>{{config('app.name')}}</title>

        
    </head>
    <body>
        <header>
            <img class="img-responsive" src="{{URL::to('/')}}/img/banner.png" alt=""/>
        </header>
        @include('inc.navbar')
        <div class="container">
       @yield('content')
        </div> 
    </body>
</html>
