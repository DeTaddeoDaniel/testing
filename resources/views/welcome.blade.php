<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esempio mappa con maker</title>

        <link rel="stylesheet" href="{{asset('js/app.js')}}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        {{-- ------------------------------------------ --}}
        {{-- mappe cdn --}}
       <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.4.0/maps/maps.css'>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.4.0/maps/maps-web.min.js"></script>
        {{-- --------------------------------------------------- --}}


    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Esempio mappa con maker, provala con il mouse
                </div>

                {{-- ---------------------------------- --}}
                <div id ="map" style="height:90vh;"></div> 
                {{-- ------------------------------------- --}}
            </div>
        </div>

        {{-- ------------------------------------------- --}}
        <script>  

            // centro della mappa
            var HQ = { lat: 45.46428976336229, lng: 9.191959328863394 }

            // visualizzazione della mappa
            var map = tt.map({
                key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                container: 'map',
                center: HQ,
                zoom: 13
            });

            // maker singolo tramite  posizione (latitudine e longitudine)
            // var marker = new tt.Marker().setLngLat(HQ).addTo(map);

            // lista array di posizioni (latitudine e longitudine)
            var posizioni = [
                { lat: 45.47063201520255, lng: 9.179320179007835 },
                { lat: 45.45272791968916, lng: 9.180218194669429 },
                { lat: 45.466448360832445, lng:  9.197505636685777 },
                { lat: 45.460235852020745, lng:  9.22371182266457 }
            ];     
        
            count = 1;
        
            // crea maker per ogni posizioni (latitudine e longitudine)
            posizioni.forEach( posizione => {
                
                // crea casella di testo di info con testo personalizzabile
                var popup = new tt.Popup({ anchor: 'top' }).setText('appartamento '+count+' test');
                
                // aggiungi maker sulla mappa
                var marker = new tt.Marker().setLngLat(posizione).addTo(map);
                
                // testo descritivo del maker
                marker.setPopup(popup).togglePopup();

                count++;
            });



        </script>
        {{-- ----------------------------- --}}
        
    </body>
</html>
