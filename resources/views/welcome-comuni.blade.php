<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('js/app.js')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{---------------------------------------------------- --}}
        {{-- vue necessario --}}
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

        {{-- axios necessario --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        {{---------------------------------------------------- --}}

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    stampa lista comuni
                </div>

                {{-- ----------------------------- --}}
                <div id="app">
                    <ul id="example-1">
                        <li v-for="comune in comuni.data" >
                            <p>@{{ comune.nome }}</p>
                        </li>
                    </ul>
                </div>
                {{-- ----------------------------------- --}}
            </div>
        </div>

        {{-- -------------------------------------------- --}}
        <script>
            new Vue({
  el: '#app',
  data () {
    return {
      comuni: null
    }
  },
  mounted () {
    axios
      .get('https://comuni-ita.herokuapp.com/api/comuni')
      .then(response => (this.comuni = response))
  }
})
        </script>
        {{-- --------------------------------------- --}}
    </body>
</html>
