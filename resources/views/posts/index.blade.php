<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- maps javascript api テスト -->        
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <!-- cssは正常に読み込めている -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <script type="module" src="{{ asset('/js/index.js')}}"></script>
  </head>

    </head>
    <body>

    <!-- maps javascript api テスト --> 
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPbum-1zCfQ-5MckvI65yLGuBHgvA0w5c&callback=initMap&v=weekly"
      defer
    ></script>

    </body>
    

</html>