<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        

    </head>
    <body>
        @foreach ($spots as $spot)
            <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key={{ config("services.google-map.apikey") }}&q={{ $spot->address }}'
            width='50%' height='300' frameborder='0'></iframe>
            <p>{{ $spot->body }}</p>
        @endforeach
    </body>
    

</html>