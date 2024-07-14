@extends('layouts.app')

@section('main')
<div class="contenitore">
        <div class="row">
          @foreach ($products as $product)
            <div class="col33">
             <div class="content">
                <img class="main-image" src="{{ $product['frontImage'] }}">
                <img class="hover-image" src="{{ $product['backImage'] }}">
                <div class="discount-label bg-red">-50%</div>
                <div class="sostenibilità bg-green">Sostenibilità</div>
                <div class="heart">&#10084;</div>
                <div class="lightgray">{{ $product['brand'] }}</div>
                <div><strong>RRELAXED FIT TEE UNISEX</strong></div>
                <div class="red">14.99 &euro; <span class="gray linea">{{ $product['price'] }} &euro;</span></div>
             </div>
            </div>
            @endforeach
         


        </div>
    </div>










@endsection