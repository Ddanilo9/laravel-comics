@extends('layouts.app')

@section('metaTitle', 'prodotti')
    
@section('content')
@php
    $links = [
      [
        'text'=> 'Digital Comics',
        'pic' => 'img/buy-comics-digital-comics.png'
],
      [
        'text'=> 'DC Merchandise',
        'pic' => 'img/buy-comics-merchandise.png'
],
      [
        'text'=> 'Subscription',
        'pic' => 'img/buy-comics-subscriptions.png'
],
      [
        'text'=> 'comic shop locator',
        'pic' => 'img/buy-comics-shop-locator.png'
],
      [
        'text'=> 'dc power visa',
        'pic' => 'img/buy-dc-power-visa.svg'
      ]
];

@endphp
<div class="main-up">
    <div class="jumbo">
    </div>
    <div class="container box-cards">
      @foreach ($products as $card)
         <div class="cards">
          <img src="{{$card['thumb']}}" :alt="">
          <h4>{{$card['series']}}</h4>
        </div> 
      @endforeach
     <button class="current-series">Current Series</button> 
    </div>
    <div class="button"><button>Load More</button>
    </div>
    
  </div>
  
  <div class="main-down">
    <div class="container">
      <ul class="menu">
        @foreach ($links as $link)
            <li class="menu-links">
              <a href="#nogo">
                <img src="{{asset($link['pic'])}}" alt="">
              {{$link['text']}}</a>
            </li> 
        @endforeach
        
      </ul>
    </div>
  </div>
@endsection