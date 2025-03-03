@extends('layouts.public')

@section('title', 'mostra aziende staff')

@section('content')


@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>

@endsection

<div class="main content padding max-width-1300">
    
    <div class="couponlist" align="center">
        <h1 class="font-weight-300">Lista delle aziende che puoi gestire:</h1>
        @isset($allAziendeAdmin)
        @foreach($allAziendeAdmin as $azienda)
        
        <div class="coupon" onclick="window.location.href = '{{ route('mostra_promo_da_modificare', [$azienda->id]) }}';">
            
            <img src="{{ asset('images/companies/' . $azienda->image) }}" class ="rounded-corners" alt="Logo offerta" >
            <h3><span>Nome azienda:</span>{{$azienda->nome}}</h3>
        @include('helpers/buttonAdmin')
            
           
        </div>
        
        @endforeach
        @endisset
        @include('pagination.paginator', ['paginator' => $allAziendeAdmin])
    </div>
</div>
@endsection

