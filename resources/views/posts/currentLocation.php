<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
       <!-- <script type="module" src="{{ asset('/js/index.js')}}"></script>-->
        <!--viteのテスト-->
    </head>
    <body>
    <div id="map" style="height:500px">
    </div>
    <span id="js-getVariable" data-name="{{ $lat }}"></span>
    <span id="js-getVariable2" data-name="{{ $lng }}"></span>
        <script>
            // currentLocation.jsで使用する定数latに、controllerで定義した$latをいれて、currentLocation.jsに渡す
            //const lat = { $lat } ;
            const lat = '{{$lat}}';
            
            // currentLocation.jsで使用する定数lngに、controllerで定義した$lngをいれて、currentLocation.jsに渡す
            //const lng = { $lng };
            const lng = '{{$lng}}';
        </script>
        <!-- {{--    上記の処理をしてから、googleMapを読み込まないとエラーが出てくる--}} -->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--<script src="{{ asset('/js/setLocation.js') }}"></script>
    <script src="{{ asset('/js/currentLocation.js') }}"></script>-->
    @vite('public/js/setLocation.js')
    @vite('public/js/currentLocation.js')
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPbum-1zCfQ-5MckvI65yLGuBHgvA0w5c&callback=initMap&v=weekly"
      defer
    ></script>
    </body>
</html>