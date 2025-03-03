@section('title', 'Coupon')

<!DOCTYPE html>
<html>
    <head>
        <title>Coupon riscattato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    </head>
    <body>
        
        <div class="coupon-tasto">
            @include('helpers/buttonIndietro')
        </div>
        @isset($buono)
        @isset($offerta)
        <div class="coupon-page">
            <div class="container-coupon">
                <h3>{{$buono->codCoupon}}</h3>
            </div>
            <img src="{{ asset('images/products/'.$offerta->logoOff ) }}" alt="logo.{{$offerta->nomeOff}}" class = "width100">
            <div class="container-coupon">
                <h2><b>{{$offerta->nomeOff}}</b></h2>
                <p>{{$offerta->oggettoOff}}</p>
            </div>
            <hr>
            <div class="info-coup">
                <p><strong>Modalità di fruizione: </strong> {{$offerta->modalita}}</p>
                <p class="utente"> <strong> Utente richiedente: </strong>{{$utente->nome}} {{$utente->cognome}}</p>
                <p><strong class="promo">Data scadenza: </strong>{{$buono->dataScad}}</p>
            </div>
        </div>
        @endisset
        @endisset
    </body>
</html>