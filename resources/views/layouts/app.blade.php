<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>{{config('app.name', 'Laravel')}}</title>
    </head>
         <body>
             @include('inc.navbar')
        <div class= "container"> 
                 {{--validation is carried out in the post controller but we still need to render the warnings here so the user can see them!--}}
         @include('inc.messages')
         @yield('content')
        </div>
         </body>
</html>
