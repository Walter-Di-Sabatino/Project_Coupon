@extends('layouts.public')

@section('title', 'Offerte azienda')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<div class=" padding-top-16">
    <div class="main content padding box-shadow" style="max-width: 1300px;">

        @isset($azienda)
        <div class="container_offerte_azienda">
            <div class="image-azienda">
                <div class="inline-block">
                    <div class="centerimagesoffers">
                        <img src="{{ asset('images/companies/'. $azienda->image) }}"  alt="$azienda->nome"/>                        
                    </div>
                </div>
            </div>
            <div class="description padding">
                <div>
                    <h2 style="font-size: 30px; font-weight: bold; " class="title-azienda" >{{$azienda->nome}}</h2>
                    <p>{{$azienda->descAzienda}}</p>
                    <p>{{$azienda->localizzazione}}</p>
                    <p>{{$azienda->tipologia}}</p></div>
            </div>
        </div>
        @endisset

        <div class="container-azienda border-top-grey margin-top-16" >
            <div class="row-offerte padding-top-16">
                <div class="column-offerte">

                    @isset($promos)
                    @foreach ($promos as $promo)

                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img src="{{ asset('images/companies/' . $promo->logoOff) }}" alt="$promo->nomeOff"/>
                            </div>
                            <h3>{{$promo->nomeOff}}</h3>
                        </div> 
                    </div>
                    @endforeach
                    @endisset
                </div>


                <!-- comment <div class="column-offerte">
    
                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img src="images/Apple-Logo.png" alt="Apple"/>
                            </div>
                            <h3>3x2 iphone</h3>
                        </div> 
                    </div>
    
                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img src="images/HP_logo.png" alt="Apple"/>
                            </div>
                            <h3>3x2 iphone</h3>
                        </div> 
                    </div>
    
                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img src="images/Conad-logo.png" alt="Apple"/>
                            </div>
                            <h3>3x2 iphone</h3>
                        </div> 
                    </div>
    
                    <div class="single-offerta">
                        <div class="inline-block">
                            <div class="centerimagesoffers">
                                <img src="images/Apple-Logo.png" alt="Apple"/>
                            </div>
                            <h3>3x2 iphone</h3>
                        </div> 
                    </div>
                </div>-->
            </div>
        </div>

        <!-- End page content -->
    </div>
</div>
@endsection
