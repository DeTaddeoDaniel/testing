<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esempio mappa</title>
        <link rel="stylesheet" href="{{asset('js/app.js')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        {{-- ------------------------------------------ --}}
        {{-- vue --}}
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

        {{-- mappe cdn --}}
        <link rel = 'stylesheet' type = 'text / css' href = 'https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css ' > 
        <script src = "https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js" > </script>
        <script src = "https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/services/services-web.min.js" > </script>
        {{-- --------------------------------------------------- --}}


    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Esempio mappa, provala con il mouse
                </div>

                {{-- ---------------------------------- --}}
                <div id ="map-div" style="height:90vh;"></div> 
                {{-- ------------------------------------- --}}
            </div>
        </div>

        {{-- ------------------------------------------- --}}
        <script>  

            // latitudine e longitudine per indicare il punto
            var test = {lng: 9.023393268223256, lat: 45.57060917065609};
            
            // variabile js per mappa
            var map = tt.map({
                key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                container: 'map-div',
                center: test,
                zoom: 18
            });

            map.addControl(new tt.FullscreenControl()); 
            var marker = new tt.Marker().setLngLat(test).addTo(map); 

            var marker = new tt.Marker().setLngLat(test).addTo(map);   

        </script>
        {{-- ----------------------------- --}}
        
    </body>
</html>
